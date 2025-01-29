document.addEventListener('DOMContentLoaded', function() {
    const viaId = document.getElementById('viaContent').dataset.viaId;
    const loading = document.getElementById('loading');
    const error = document.getElementById('error');
    const errorMessage = document.getElementById('errorMessage');
    const content = document.getElementById('viaContent');
    const backButton = document.getElementById('backButton');

    // Referencias a los elementos del DOM
    const viaNombre = document.getElementById('viaNombre');
    const viaGrado = document.getElementById('viaGrado');
    const viaFoto = document.getElementById('viaFoto');
    const viaUbicacion = document.getElementById('viaUbicacion');
    const viaTotalAscensos = document.getElementById('viaTotalAscensos');
    const viaDescripcion = document.getElementById('viaDescripcion');

    // Referencias a las tabs
    const tabs = {
        ascensos: document.getElementById('ascensosTab'),
        comentarios: document.getElementById('comentariosTab')
    };

    const contenidoTabs = {
        ascensos: document.getElementById('ascensosContent'),
        comentarios: document.getElementById('comentariosContent')
    };

    // Función para mostrar el contenido de una tab
    function showTab(tabName) {
        Object.values(contenidoTabs).forEach(content => {
            content.classList.add('hidden');
        });

        Object.values(tabs).forEach(tab => {
            tab.classList.remove('border-blue-500', 'text-blue-600');
            tab.classList.add('border-transparent', 'text-gray-500');
        });

        contenidoTabs[tabName].classList.remove('hidden');
        tabs[tabName].classList.remove('border-transparent', 'text-gray-500');
        tabs[tabName].classList.add('border-blue-500', 'text-blue-600');
    }

    // Event listeners para las tabs
    Object.entries(tabs).forEach(([name, tab]) => {
        tab.addEventListener('click', () => showTab(name));
    });

    // Función para cargar los ascensos
    function loadAscensos(ascensos) {
        const container = document.getElementById('ascensosContainer');
        container.innerHTML = '';

        if (!ascensos || ascensos.length === 0) {
            container.innerHTML = `
                <div class="text-center py-8 text-gray-500">
                    No hay ascensos registrados
                </div>`;
            return;
        }

        ascensos.forEach(ascenso => {
            const ascensoElement = document.createElement('div');
            ascensoElement.className = 'bg-white p-4 rounded-lg shadow';
            ascensoElement.innerHTML = `
                <div class="flex items-center justify-between">
                    <div>
                        <p class="font-medium">${ascenso.usuario.nombre}</p>
                        <p class="text-sm text-gray-500">${ascenso.fecha}</p>
                    </div>
                </div>
            `;
            container.appendChild(ascensoElement);
        });
    }

    // Función para cargar los comentarios
    function loadComentarios(comentarios) {
        const container = document.getElementById('comentariosContainer');
        container.innerHTML = '';

        if (!comentarios || comentarios.length === 0) {
            container.innerHTML = `
                <div class="text-center py-8 text-gray-500">
                    No hay comentarios disponibles
                </div>`;
            return;
        }

        comentarios.forEach(comentario => {
            const comentarioElement = document.createElement('div');
            comentarioElement.className = 'bg-white p-4 rounded-lg shadow';
            comentarioElement.innerHTML = `
                <div class="flex items-start justify-between">
                    <div>
                        <p class="font-medium">${comentario.usuario.nombre}</p>
                        <p class="text-gray-600">${comentario.texto}</p>
                        <div class="flex items-center mt-2">
                            <div class="flex items-center">
                                ${Array(5).fill().map((_, i) => `
                                    <i class="fas fa-star ${i < comentario.puntuacion ? 'text-yellow-400' : 'text-gray-300'}"></i>
                                `).join('')}
                            </div>
                            <span class="text-gray-500 text-sm ml-2">${comentario.fecha}</span>
                        </div>
                    </div>
                </div>
            `;
            container.appendChild(comentarioElement);
        });
    }

    // Función para cargar la información de la vía
    function loadViaInfo() {
        loading.classList.remove('hidden');
        error.classList.add('hidden');
        content.classList.add('hidden');

        fetch(`/api/routes/details/${viaId}`)
            .then(response => response.json())
            .then(result => {
                if (result.status === 'success') {
                    const data = result.data;
                    viaNombre.textContent = data.nombre;
                    viaGrado.textContent = `Grado ${data.gradoDificultad}`;
                    viaFoto.src = data.fotoPrincipal;
                    viaFoto.alt = data.nombre;
                    viaUbicacion.textContent = `${data.bloque.zona.nombre} > ${data.bloque.nombre}`;
                    viaTotalAscensos.textContent = data.totalAscensos;
                    viaDescripcion.textContent = data.descripcion || 'Sin descripción';

                    loadAscensos(data.ascensos);
                    loadComentarios(data.comentarios);

                    content.classList.remove('hidden');
                    showTab('ascensos'); // Mostrar primera tab por defecto
                } else {
                    throw new Error(result.message);
                }
            })
            .catch(err => {
                errorMessage.textContent = 'Error al cargar la información de la vía';
                error.classList.remove('hidden');
                console.error('Error:', err);
            })
            .finally(() => {
                loading.classList.add('hidden');
            });
    }

    // Event listener para el botón de volver
    backButton.addEventListener('click', () => {
        window.location.href = '/admin/routes/list';
    });

    // Cargar la información inicial
    loadViaInfo();
});
document.addEventListener('DOMContentLoaded', function() {
    const restauranteId = document.getElementById('restauranteContainer').dataset.restauranteId;
    const loading = document.getElementById('loading');
    const error = document.getElementById('error');
    const errorMessage = document.getElementById('errorMessage');
    const content = document.getElementById('restauranteContent');
    const backButton = document.getElementById('backButton');

    // Referencias a los elementos del DOM
    const restauranteNombre = document.getElementById('restauranteNombre');
    const restauranteUbicacion = document.getElementById('restauranteUbicacion');
    const restauranteContacto = document.getElementById('restauranteContacto');
    const restauranteDescripcion = document.getElementById('restauranteDescripcion');

    // Referencias a las tabs y contenedores
    const tabs = {
        comentarios: document.getElementById('comentariosTab'),
        fotos: document.getElementById('fotosTab'),
        valoraciones: document.getElementById('valoracionesTab')
    };

    const contenidoTabs = {
        comentarios: document.getElementById('comentariosContent'),
        fotos: document.getElementById('fotosContent'),
        valoraciones: document.getElementById('valoracionesContent')
    };

    // Función para mostrar el contenido de una tab
    function showTab(tabName) {
        // Ocultar todos los contenidos
        Object.values(contenidoTabs).forEach(content => {
            content.classList.add('hidden');
        });

        // Resetear estilos de todas las tabs
        Object.values(tabs).forEach(tab => {
            tab.classList.remove('border-blue-500', 'text-blue-600');
            tab.classList.add('border-transparent', 'text-gray-500');
        });

        // Mostrar el contenido seleccionado
        contenidoTabs[tabName].classList.remove('hidden');
        tabs[tabName].classList.remove('border-transparent', 'text-gray-500');
        tabs[tabName].classList.add('border-blue-500', 'text-blue-600');
    }

    // Event listeners para las tabs
    Object.entries(tabs).forEach(([name, tab]) => {
        tab.addEventListener('click', () => showTab(name));
    });

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
                        <p class="font-medium">${comentario.usuario}</p>
                        <p class="text-gray-600">${comentario.comentario}</p>
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

    // Función para cargar las fotos
    function loadFotos(fotos) {
        const container = document.getElementById('fotosContainer');
        container.innerHTML = '';

        if (!fotos || fotos.length === 0) {
            container.innerHTML = `
                <div class="col-span-3 text-center py-8 text-gray-500">
                    No hay fotos disponibles
                </div>`;
            return;
        }

        fotos.forEach(foto => {
            const fotoElement = document.createElement('div');
            fotoElement.className = 'relative aspect-square rounded-lg overflow-hidden';
            fotoElement.innerHTML = `
                <img src="${foto.url}" alt="${foto.descripcion}" 
                     class="object-cover w-full h-full">
                <div class="absolute bottom-0 left-0 right-0 p-2 bg-black bg-opacity-50 text-white text-sm">
                    ${foto.descripcion}
                </div>
            `;
            container.appendChild(fotoElement);
        });
    }

    // Función para cargar la información del restaurante
    function loadRestauranteInfo() {
        loading.classList.remove('hidden');
        error.classList.add('hidden');
        content.classList.add('hidden');

        fetch(`/api/restaurants/details/${restauranteId}`)
            .then(response => response.json())
            .then(data => {
                restauranteNombre.textContent = data.nombre;
                restauranteUbicacion.textContent = data.ubicacion;
                restauranteContacto.textContent = data.contacto || 'No disponible';
                restauranteDescripcion.textContent = data.descripcion || 'Sin descripción';

                // Dentro de la función loadRestaurantData, después de cargar los datos básicos:
                if (data.fotoPrincipal) {
                    const fotoUrl = `${data.fotoPrincipal}`;
                    const fotoElement = document.getElementById('restauranteFoto');
                    fotoElement.src = fotoUrl;
                    fotoElement.alt = data.nombre;
                } else {
                    // Imagen por defecto si no hay foto
                    document.getElementById('restauranteFoto').src = '/assets/images/default-restaurant.jpg';
                }

                loadComentarios(data.comentarios);
                loadFotos(data.fotos);

                content.classList.remove('hidden');
                showTab('comentarios'); // Mostrar primera tab por defecto
            })
            .catch(err => {
                errorMessage.textContent = 'Error al cargar la información del restaurante';
                error.classList.remove('hidden');
                console.error('Error:', err);
            })
            .finally(() => {
                loading.classList.add('hidden');
            });
    }

    // Event listener para el botón de volver
    backButton.addEventListener('click', () => {
        window.location.href = '/admin/restaurants/list';
    });

    // Cargar la información inicial
    loadRestauranteInfo();
});
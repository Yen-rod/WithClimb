function actualizarContenidoZona(zonaData) {
    document.getElementById('zonaNombre').textContent = zonaData.nombre;
    document.getElementById('zonaUbicacion').textContent = zonaData.ubicacion;
    document.getElementById('zonaDescripcion').textContent = zonaData.descripcion;
    document.getElementById('zonaTotalAscensos').textContent = `${zonaData.totalAscensos} ascensos`;

    cargarBloques(zonaData.bloques);
    cargarRestaurantes(zonaData.restaurantes);
    cargarEstadisticas(zonaData);
}

function mostrarError(mensaje) {
    const error = document.getElementById('error');
    const errorMessage = document.getElementById('errorMessage');
    const loading = document.getElementById('loading');

    errorMessage.textContent = mensaje;
    error.classList.remove('hidden');
    loading.classList.add('hidden');
}

function cargarBloques(bloques) {
    const bloquesContainer = document.getElementById('bloquesContent');
    bloquesContainer.innerHTML = bloques.map(bloque => `
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-lg font-semibold">${bloque.nombre}</h3>
            <p class="text-gray-600">${bloque.descripcion}</p>
            <span class="text-sm text-gray-500">Total ascensos: ${bloque.totalAscensos}</span>
        </div>
    `).join('');
}

function cargarRestaurantes(restaurantes) {
    const restaurantesContainer = document.getElementById('restaurantesContent');
    restaurantesContainer.innerHTML = restaurantes.map(restaurante => `
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-lg font-semibold">${restaurante.nombre}</h3>
            <p class="text-gray-600">${restaurante.ubicacion}</p>
            <p class="text-gray-500">${restaurante.contacto || 'Sin contacto'}</p>
        </div>
    `).join('');
}

function cargarEstadisticas(zonaData) {
    const estadisticasContainer = document.getElementById('estadisticasContent');
    const totalVias = zonaData.bloques.reduce((total, bloque) => total + bloque.vias.length, 0);

    estadisticasContainer.innerHTML = `
        <div class="bg-white rounded-lg shadow-sm p-6">
            <dt class="text-sm font-medium text-gray-500">Total Ascensos</dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900">${zonaData.totalAscensos}</dd>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <dt class="text-sm font-medium text-gray-500">Total Bloques</dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900">${zonaData.bloques.length}</dd>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <dt class="text-sm font-medium text-gray-500">Total Vías</dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900">${totalVias}</dd>
        </div>
    `;
}
document.addEventListener('DOMContentLoaded', function() {
    const notificationSystem = {
        show(message, type = 'success') {
            const notificationsContainer = document.getElementById('notifications-container') ||
                (() => {
                    const container = document.createElement('div');
                    container.id = 'notifications-container';
                    container.className = 'fixed bottom-4 left-4 z-50 flex flex-col gap-2';
                    document.body.appendChild(container);
                    return container;
                })();

            const notification = document.createElement('div');
            const bgColor = type === 'success' ? 'bg-green-500' : 'bg-red-500';

            notification.className = `notification ${bgColor} text-white px-6 py-4 rounded-lg shadow-lg transform transition-all duration-300 translate-y-full opacity-0`;
            notification.innerHTML = `
                <div class="flex items-center space-x-3">
                    <span class="text-lg">${type === 'success' ? '✓' : '✕'}</span>
                    <p class="pr-4">${message}</p>
                    <button class="ml-auto text-white hover:text-gray-200" onclick="this.parentElement.parentElement.remove()">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            `;

            notificationsContainer.appendChild(notification);
            requestAnimationFrame(() => {
                notification.classList.remove('translate-y-full', 'opacity-0');
            });
            setTimeout(() => {
                notification.classList.add('translate-y-full', 'opacity-0');
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }
    };

    const container = document.getElementById('zonaContainer');
    const zonaId = container.dataset.zonaId;
    const loading = document.getElementById('loading');
    const error = document.getElementById('error');
    const content = document.getElementById('zonaContent');

    // Tab elements
    const tabs = {
        bloques: document.getElementById('bloquesTab'),
        restaurantes: document.getElementById('restaurantesTab'),
        estadisticas: document.getElementById('estadisticasTab')
    };

    const contents = {
        bloques: document.getElementById('bloquesContent'),
        restaurantes: document.getElementById('restaurantesContent'),
        estadisticas: document.getElementById('estadisticasContent')
    };

    function showTab(tabName) {
        // Update tab buttons
        Object.keys(tabs).forEach(key => {
            const tab = tabs[key];
            const content = contents[key];

            if (key === tabName) {
                tab.classList.remove('border-transparent', 'text-gray-500');
                tab.classList.add('border-blue-500', 'text-blue-600');
                content.classList.remove('hidden');
            } else {
                tab.classList.remove('border-blue-500', 'text-blue-600');
                tab.classList.add('border-transparent', 'text-gray-500');
                content.classList.add('hidden');
            }
        });
    }

    // Add click events to tabs
    Object.keys(tabs).forEach(key => {
        tabs[key].addEventListener('click', () => showTab(key));
    });

    // [Rest of your existing functions for loading and displaying data]
    async function cargarDatosZona() {
        try {
            loading.classList.remove('hidden');
            content.classList.add('hidden');
            error.classList.add('hidden');

            const response = await fetch(`/api/zones/details/${zonaId}`);
            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);

            const zonaData = await response.json();
            actualizarContenidoZona(zonaData);
            content.classList.remove('hidden');

        } catch (err) {
            console.error('Error al cargar datos:', err);
            mostrarError('Error al cargar los datos de la zona');
        } finally {
            loading.classList.add('hidden');
        }
    }

    document.getElementById('backButton').addEventListener('click', () => {
        window.location.href = '/admin/zones/list';
    });

    // Initialize with first tab active
    showTab('bloques');
    cargarDatosZona();
});


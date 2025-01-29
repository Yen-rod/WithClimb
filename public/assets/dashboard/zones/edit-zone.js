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

    let currentDeleteButton = null;
    let currentBloqueElement = null;
    const deleteModal = document.getElementById('deleteModal');
    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
    const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');

    // Función para mostrar el modal
    function showModal() {
        deleteModal.classList.remove('hidden');
        // Añadir animación de entrada
        deleteModal.querySelector('.bg-white').classList.add('animate-in', 'fade-in', 'duration-200');
    }

    const form = document.getElementById('zonaForm');
    const zoneId = form.dataset.zoneId;
    let map;

    // Función para ocultar el modal
    function hideModal() {
        deleteModal.classList.add('hidden');
        currentDeleteButton = null;
        currentBloqueElement = null;
    }

    // Función para alternar el estado del botón durante la carga
    function toggleButtonLoader(button, loading) {
        if (loading) {
            button.disabled = true;
            button.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
            button.classList.add('opacity-50');
        } else {
            button.disabled = false;
            button.innerHTML = 'Eliminar';
            button.classList.remove('opacity-50');
        }
    }


    // Función para eliminar bloque
    async function deleteBloque(bloqueId, bloqueElement, button) {
        // Si es un bloque nuevo (no guardado), solo eliminarlo del DOM
        if (bloqueId.toString().startsWith('new_')) {
            bloqueElement.remove();
            return;
        }

        try {
            toggleButtonLoader(button, true);

            const response = await fetch(`/api/zones/bloque/${bloqueId}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                }
            });

            const result = await response.json();

            if (result.status === 'success') {
                bloqueElement.remove();
                notificationSystem.show('Bloque eliminado correctamente', 'success');
                hideModal();
            } else {
                notificationSystem.show(result.message || 'Error al eliminar el bloque', 'error');
                toggleButtonLoader(confirmButton, false);
            }
        } catch (error) {
            console.error('Error:', error);
            notificationSystem.show('Error de conexión', 'error');
            toggleButtonLoader(button, false);
        }
    }

    // Función para crear un nuevo bloque
    function createBloqueElement() {
        const bloqueId = 'new_' + Date.now();
        const bloqueHtml = `
            <div class="bloque-item border rounded-lg p-4" data-bloque-id="${bloqueId}">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-sm font-medium text-gray-700">Nuevo Bloque</h3>
                </div>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nombre del Bloque</label>
                        <input
                            type="text"
                            name="bloques[${bloqueId}][nombre]"
                            required
                            class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                            placeholder="Nombre del bloque"
                        >
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                        <textarea
                            name="bloques[${bloqueId}][descripcion]"
                            rows="3"
                            class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                            placeholder="Describe el bloque..."
                        ></textarea>
                    </div>
                </div>
            </div>
        `;

        document.getElementById('bloquesList').insertAdjacentHTML('beforeend', bloqueHtml);
    }

    // Evento para mostrar el modal de eliminación
    document.getElementById('bloquesList').addEventListener('click', function(e) {
        const deleteBtn = e.target.closest('.delete-bloque-btn');
        if (!deleteBtn) return;

        currentDeleteButton = deleteBtn;
        currentBloqueElement = deleteBtn.closest('.bloque-item');
        showModal();
    });

    // Evento para confirmar la eliminación
    confirmDeleteBtn.addEventListener('click', function() {
        if (currentBloqueElement) {
            const bloqueId = currentBloqueElement.dataset.bloqueId;
            deleteBloque(bloqueId, currentBloqueElement, this);
        }
    });

    // Evento para cancelar la eliminación
    cancelDeleteBtn.addEventListener('click', hideModal);

    // Cerrar modal al hacer clic fuera
    deleteModal.addEventListener('click', function(e) {
        if (e.target === this) {
            hideModal();
        }
    });

    // Cerrar modal con la tecla Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !deleteModal.classList.contains('hidden')) {
            hideModal();
        }
    });


    // Evento para añadir nuevo bloque
    document.getElementById('addBlockBtn').addEventListener('click', createBloqueElement);


    // Función para inicializar el mapa
    function initMap(lat, lng) {

        const ubicacionInput = document.getElementById('ubicacionInput');
        let initialLat = 60.4168;
        let initialLng = -5.7038;

        if (ubicacionInput.value) {
            try {
                const [lat, lng] = ubicacionInput.value.split(',').map(coord => parseFloat(coord.trim()));
                if (!isNaN(lat) && !isNaN(lng)) {
                    initialLat = lat;
                    initialLng = lng;
                }
            } catch (e) {
                console.error('Error parsing coordinates:', e);
            }
        }

        setTimeout(() => {
            map = L.map('map', {
                center: [initialLat, initialLng],
                zoom: 13,
                zoomControl: true
            });
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

            // Añadir buscador
            const search = new GeoSearch.GeoSearchControl({
                provider: new GeoSearch.OpenStreetMapProvider(),
                style: 'bar',
                showMarker: true,
                showPopup: false,
                autoClose: true,
                searchLabel: 'Buscar ubicación...',
                keepResult: true
            });

            map.addControl(search);

            // Añadir marcador inicial si hay coordenadas
            if (ubicacionInput.value) {
                addMarker([initialLat, initialLng]);
            }

            // Evento para capturar la búsqueda
            map.on('geosearch/showlocation', function(result) {
                if (result && result.location) {
                    const location = {
                        lat: parseFloat(result.location.lat),
                        lng: parseFloat(result.location.lng)
                    };

                    if (!isNaN(location.lat) && !isNaN(location.lng)) {
                        addMarker(location);
                    }
                }
            });

            // Evento click para el marcador
            map.on('click', function(e) {
                addMarker(e.latlng);
            });

            setTimeout(() => {
                document.getElementById('map-loader').style.display = 'none';
            }, 150);

        }, 100); // medio segundo de delay o retraso para asegurar carga
    }

    // Función para añadir marcador
    function addMarker(latlng) {
        if (window.currentMarker) {
            map.removeLayer(window.currentMarker);
        }

        const lat = typeof latlng.lat === 'number' ? latlng.lat : latlng[0];
        const lng = typeof latlng.lng === 'number' ? latlng.lng : latlng[1];

        window.currentMarker = L.marker([lat, lng]).addTo(map);
        document.getElementById('ubicacionInput').value = `${lat},${lng}`;
        document.getElementById('locationPreview').style.display = 'block';
        document.getElementById('locationPreview').innerHTML =
            `<small>Ubicación seleccionada: ${lat.toFixed(6)}, ${lng.toFixed(6)}</small>`;
    }

    // Inicializar mapa
    initMap();

    // Manejar envío del formulario
    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const bloquesData = {};
        const nuevoBloques = [];

        // Recoger datos de los bloques existentes y nuevos
        document.querySelectorAll('.bloque-item').forEach(bloqueElement => {
            const bloqueId = bloqueElement.dataset.bloqueId;
            const bloqueData = {
                nombre: formData.get(`bloques[${bloqueId}][nombre]`),
                descripcion: formData.get(`bloques[${bloqueId}][descripcion]`)
            };

            if (bloqueId.startsWith('new_')) {
                nuevoBloques.push(bloqueData);
            } else {
                bloquesData[bloqueId] = bloqueData;
            }
        });

        const data = {
            nombre: formData.get('nombre'),
            ubicacion: formData.get('ubicacion'),
            descripcion: formData.get('descripcion'),
            bloques: bloquesData,
            nuevosBloques: nuevoBloques
        };


        try {
            const response = await fetch(`/api/zones/${zoneId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if (result.status === 'success') {
                notificationSystem.show('Zona actualizada correctamente', 'success');
                setTimeout(() => window.location.href = '/admin/zones/list', 2000);
            } else {
                notificationSystem.show(result.message || 'Error al actualizar la zona', 'error');
                if (result.errors) {
                    result.errors.forEach(error => notificationSystem.show(error, 'error'));
                }
            }
        } catch (error) {
            console.error('Error:', error);
            notificationSystem.show('Error de conexión', 'error');
        }
    });
});
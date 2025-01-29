document.addEventListener('DOMContentLoaded', function() {
    // Notification system
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

            // Animate in
            requestAnimationFrame(() => {
                notification.classList.remove('translate-y-full', 'opacity-0');
            });

            // Auto dismiss
            setTimeout(() => {
                notification.classList.add('translate-y-full', 'opacity-0');
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }
    };

    function createBloqueElement() {
        const bloqueId = Date.now();
        const bloqueHtml = `
            <div class="bloque-item border rounded-lg p-4" data-bloque-id="${bloqueId}">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-sm font-medium text-gray-700">Bloque #${document.querySelectorAll('.bloque-item').length + 1}</h3>
                    <button type="button" class="delete-bloque-btn text-red-600 hover:text-red-800">
                        <i class="fas fa-trash"></i>
                    </button>
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

    document.getElementById('addBlockBtn').addEventListener('click', createBloqueElement);

    document.getElementById('bloquesList').addEventListener('click', function(e) {
        if (e.target.closest('.delete-bloque-btn')) {
            e.target.closest('.bloque-item').remove();
        }
    });

    let map;

    function initMap(lat, lng) {
        setTimeout(() => {
            map = L.map('map').setView([lat, lng], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

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

            map.on('click', function(e) {
                addMarker(e.latlng);
            });

            setTimeout(() => {
                document.getElementById('map-loader').style.display = 'none';
            }, 150);

        }, 100);
    }

    function addMarker(latlng) {
        if (window.currentMarker) {
            map.removeLayer(window.currentMarker);
        }
        window.currentMarker = L.marker(latlng).addTo(map);

        document.getElementById('ubicacionInput').value = `${latlng.lat},${latlng.lng}`;
        document.getElementById('locationPreview').style.display = 'block';
        document.getElementById('locationPreview').innerHTML = `
           <small>Ubicación seleccionada: ${latlng.lat.toFixed(6)}, ${latlng.lng.toFixed(6)}</small>
       `;
    }

    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(
            (position) => initMap(position.coords.latitude, position.coords.longitude),
            () => initMap(40.4168, -3.7038)
        );
    } else {
        initMap(40.4168, -3.7038);
    }

    document.getElementById('zonaForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const bloques = [];

        document.querySelectorAll('.bloque-item').forEach(bloqueElement => {
            const bloqueId = bloqueElement.dataset.bloqueId;
            bloques.push({
                nombre: formData.get(`bloques[${bloqueId}][nombre]`),
                descripcion: formData.get(`bloques[${bloqueId}][descripcion]`)
            });
        });

        const data = {
            nombre: formData.get('nombre'),
            ubicacion: formData.get('ubicacion'),
            descripcion: formData.get('descripcion'),
            bloques: bloques
        };

        try {
            const response = await fetch('/api/zones/create', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if(result.status === 'success') {
                notificationSystem.show('Zona creada correctamente', 'success');
                setTimeout(() => window.location.href = '/admin/zones/list', 3000);
            } else {
                notificationSystem.show(result.message || 'Error al crear la zona', 'error');
            }
        } catch (error) {
            notificationSystem.show('Error de conexión', 'error');
        }
    });
});
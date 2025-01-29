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

    // Configuración de FilePond
    FilePond.registerPlugin(
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType,
        FilePondPluginImagePreview,
        FilePondPluginImageValidateSize
    );

    // Inicializar FilePond
    const inputElement = document.querySelector('input[type="file"].filepond');
    const pond = FilePond.create(inputElement, {
        acceptedFileTypes: ['image/png', 'image/jpeg', 'image/jpg'],
        imageValidateSizeMinWidth: 1920,
        imageValidateSizeMaxWidth: 1920,
        imageValidateSizeMinHeight: 1080,
        imageValidateSizeMaxHeight: 1080,
        labelFileTypeNotAllowed: 'Solo se permiten archivos PNG, JPG o JPEG',
        labelIdle: 'Arrastra y suelta tu imagen o <span class="filepond--label-action">Examinar</span>',
        maxFiles: 1,
        required: true,
        server: {
            process: '/api/upload/temp',
            revert: '/api/upload/temp/revert',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }
    });

    // Implementación del buscador nativo de zonas
    const zonaContainer = document.createElement('div');
    zonaContainer.className = 'relative';
    const zonaInput = document.createElement('input');
    zonaInput.type = 'text';
    zonaInput.className = 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500';
    zonaInput.placeholder = 'Buscar zona...';

    const zonaResults = document.createElement('div');
    zonaResults.className = 'absolute left-0 right-0 mt-1 bg-white border rounded-lg shadow-lg max-h-60 overflow-y-auto hidden z-50';

    // Input oculto para el valor seleccionado
    const zonaHiddenInput = document.createElement('input');
    zonaHiddenInput.type = 'hidden';
    zonaHiddenInput.name = 'idZona';

    // Reemplazar el select original
    const originalSelect = document.getElementById('zona');
    originalSelect.parentNode.replaceChild(zonaContainer, originalSelect);
    zonaContainer.appendChild(zonaInput);
    zonaContainer.appendChild(zonaResults);
    zonaContainer.appendChild(zonaHiddenInput);

    let debounceTimer;

    zonaInput.addEventListener('input', function() {
        clearTimeout(debounceTimer);
        if (this.value.length < 2) {
            zonaResults.classList.add('hidden');
            return;
        }

        debounceTimer = setTimeout(async () => {
            try {
                const response = await fetch(`/api/zones/search?q=${encodeURIComponent(this.value)}`);
                const data = await response.json();

                if (!data.items.length) {
                    zonaResults.innerHTML = `
                        <div class="px-4 py-2 text-gray-500">
                            No se encontraron resultados
                        </div>
                    `;
                } else {
                    zonaResults.innerHTML = data.items.map(zona => `
                        <div class="px-4 py-2 cursor-pointer hover:bg-gray-100" data-id="${zona.id}" data-name="${zona.nombre}">
                            ${zona.nombre}
                        </div>
                    `).join('');
                }

                zonaResults.classList.remove('hidden');
            } catch (error) {
                console.error('Error:', error);
                notificationSystem.show('Error al buscar zonas', 'error');
            }
        }, 300);
    });

    zonaResults.addEventListener('click', function(e) {
        const item = e.target.closest('[data-id]');
        if (item) {
            zonaHiddenInput.value = item.dataset.id;
            zonaInput.value = item.dataset.name;
            zonaResults.classList.add('hidden');
        }
    });

    // Cerrar resultados al hacer click fuera
    document.addEventListener('click', function(e) {
        if (!zonaContainer.contains(e.target)) {
            zonaResults.classList.add('hidden');
        }
    });

    document.getElementById('restauranteForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        if (!pond.getFiles().length) {
            notificationSystem.show('La foto principal es obligatoria', 'error');
            return;
        }

        if (!zonaHiddenInput.value) {
            notificationSystem.show('Debe seleccionar una zona', 'error');
            return;
        }

        const formData = new FormData(this);
        const pondFile = pond.getFiles()[0];
        if (pondFile && pondFile.serverId) {
            formData.append('fotoPrincipal', pondFile.serverId);
        }

        try {
            const response = await fetch('/api/restaurants/create', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if(result.status === 'success') {
                notificationSystem.show('Restaurante creado correctamente', 'success');
                setTimeout(() => window.location.href = '/admin/restaurants/list', 2000);
            } else {
                notificationSystem.show(result.message || 'Error al crear el restaurante', 'error');
            }
        } catch (error) {
            console.error('Error:', error);
            notificationSystem.show('Error de conexión', 'error');
        }
    });
});
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

    FilePond.registerPlugin(
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType,
        FilePondPluginImagePreview,
        FilePondPluginImageValidateSize
    );

    const inputElement = document.querySelector('input[type="file"].filepond');
    const pond = FilePond.create(inputElement, {
        acceptedFileTypes: ['image/jpg', 'image/jpeg', 'image/png'],
        imageValidateSizeMinWidth: 1920,
        imageValidateSizeMaxWidth: 1920,
        imageValidateSizeMinHeight: 1080,
        imageValidateSizeMaxHeight: 1080,
        labelFileTypeNotAllowed: 'Solo se permiten archivos PNG',
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

    fetch('/api/zones/blocks/list')
        .then(response => response.json())
        .then(result => {
            if (result.status === 'success' && result.data) {
                const select = document.getElementById('idBloque');
                select.innerHTML = '<option value="">Selecciona un bloque</option>';

                result.data.forEach(bloque => {
                    const option = document.createElement('option');
                    option.value = bloque.id;
                    option.textContent = bloque.nombre;
                    select.appendChild(option);
                });
            } else {
                console.error('Error en el formato de datos:', result);
                notificationSystem.show('Error al cargar los bloques', 'error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            notificationSystem.show('Error de conexión al cargar los bloques', 'error');
        });

    document.getElementById('viaForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const pondFile = pond.getFiles()[0];
        if (pondFile && pondFile.serverId) {
            formData.append('fotoPrincipal', pondFile.serverId);
        }

        try {
            const response = await fetch('/api/routes/create', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.status === 'success') {
                notificationSystem.show('Vía creada correctamente', 'success');
                setTimeout(() => window.location.href = '/admin/routes/list', 2000);
            } else {
                notificationSystem.show(result.message || 'Error al crear la vía', 'error');
            }
        } catch (error) {
            console.error('Error:', error);
            notificationSystem.show('Error de conexión', 'error');
        }
    });
});
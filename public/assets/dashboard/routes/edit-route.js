document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('viaForm');
    const viaId = form.dataset.viaId;
    const loading = document.getElementById('loading');

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
        allowFileTypeValidation: false,
        fileValidateTypeLabelExpectedTypesMap: null,
        fileValidateTypeDetectType:null,
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

    async function loadViaData() {
        try {
            const response = await fetch(`/api/routes/details/${viaId}`);
            const result = await response.json();

            if (result.status === 'success') {
                const data = result.data;
                document.getElementById('nombre').value = data.nombre;
                document.getElementById('gradoDificultad').value = data.gradoDificultad;
                document.getElementById('descripcion').value = data.descripcion || '';

                if (data.fotoPrincipal) {
                    const file = await fetch(data.fotoPrincipal).then(r => r.blob());
                    const fileList = new DataTransfer();
                    fileList.items.add(new File([file], 'current-image.png', {type: 'image/png'}));
                    pond.addFile(fileList.files[0]);
                }

                await loadBloques(data.bloque.id);
                form.classList.remove('hidden');
                loading.classList.add('hidden');
            }
        } catch (error) {
            console.error('Error:', error);
            notificationSystem.show('Error al cargar los datos de la vía', 'error');
        }
    }

    async function loadBloques(selectedBloqueId) {
        try {
            const response = await fetch('/api/zones/blocks/list');
            const result = await response.json();

            if (result.status === 'success') {
                const select = document.getElementById('idBloque');
                select.innerHTML = '<option value="">Selecciona un bloque</option>';

                result.data.forEach(bloque => {
                    const option = document.createElement('option');
                    option.value = bloque.id;
                    option.textContent = bloque.nombre;
                    option.selected = bloque.id === selectedBloqueId;
                    select.appendChild(option);
                });
            }
        } catch (error) {
            console.error('Error:', error);
            notificationSystem.show('Error al cargar los bloques', 'error');
        }
    }

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const data = Object.fromEntries(formData.entries());

        const pondFile = pond.getFiles()[0];
        if (pondFile && pondFile.serverId) {
            data.fotoPrincipal = pondFile.serverId;
        }

        try {
            const response = await fetch(`/api/routes/${viaId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if (result.status === 'success') {
                notificationSystem.show('Vía actualizada correctamente', 'success');
                setTimeout(() => window.location.href = '/admin/routes/list', 2000);
            } else {
                notificationSystem.show(result.message || 'Error al actualizar la vía', 'error');
            }
        } catch (error) {
            console.error('Error:', error);
            notificationSystem.show('Error de conexión', 'error');
        }
    });

    loadViaData();
});
// via-detail.js
document.addEventListener('DOMContentLoaded', function() {
    // Gestión de tabs
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    const registerAscensoBtn = document.getElementById('registerAscensoBtn');
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

    function showNotification(message, type = 'success') {
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

        notificationSystem.show(message, type);
    }


    if (registerAscensoBtn) {
        registerAscensoBtn.addEventListener('click', async function() {
            try {
                const viaId = this.dataset.viaId;
                const response = await fetch(`/api/ascensos/register/${viaId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                });

                const result = await response.json();

                if (result.status === 'success') {
                    // Mostrar notificación de éxito
                    showNotification('Ascenso registrado correctamente', 'success');
                    // Actualizar contador de ascensos en la página
                    updateAscensosCount();
                } else {
                    showNotification(result.message || 'Error al registrar el ascenso', 'error');
                }
            } catch (error) {
                showNotification('Error de conexión', 'error');
            }
        });
    }

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const tabName = button.dataset.tab;

            // Actualizar estados de los botones
            tabButtons.forEach(btn => {
                btn.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
                btn.classList.add('text-gray-500');
            });
            button.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
            button.classList.remove('text-gray-500');

            // Mostrar contenido de tab
            tabContents.forEach(content => {
                content.classList.remove('active');
                if (content.id === tabName) {
                    content.classList.add('active');
                }
            });
        });
    });

    function updateAscensosCount() {
        const countElement = document.getElementById('totalAscensos');
        if (countElement) {
            const currentCount = parseInt(countElement.textContent);
            countElement.textContent = currentCount + 1;
        }
    }

    // Modal de subida de fotos
    const modal = document.getElementById('uploadModal');
    const uploadButton = document.getElementById('uploadPhotoBtn');

    uploadButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    // Cerrar modal
    window.closeModal = function() {
        modal.classList.add('hidden');
    };

    // Cerrar modal al hacer clic fuera
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Gestión de dropdowns
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        const button = dropdown.querySelector('button');

        button.addEventListener('click', (e) => {
            e.stopPropagation();
            // Cerrar otros dropdowns
            dropdowns.forEach(d => {
                if (d !== dropdown) d.classList.remove('active');
            });
            // Toggle el actual
            dropdown.classList.toggle('active');
        });

        // Evitar que el dropdown se cierre al hacer click dentro
        const dropdownContent = dropdown.querySelector('.dropdown-content');
        if (dropdownContent) {
            dropdownContent.addEventListener('click', (e) => {
                e.stopPropagation();
            });
        }
    });

    // Cerrar dropdowns al hacer click fuera
    document.addEventListener('click', () => {
        dropdowns.forEach(d => d.classList.remove('active'));
    });


    uploadButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    window.closeModal = function() {
        modal.classList.add('hidden');
    }

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Manejo del formulario de subida
    const uploadForm = document.getElementById('uploadForm');
    uploadForm.addEventListener('submit', (e) => {
        e.preventDefault();
        // Aquí iría la lógica de subida
        closeModal();
    });

    // Cargar comentarios iniciales
    loadComments();

});

// Función para cargar comentarios
async function loadComments() {
    const commentsContainer = document.getElementById('commentsContainer');
    const viaId = commentsContainer.dataset.viaId; // Asegúrate de añadir este atributo al contenedor

    try {
        // Mostrar estado de carga
        commentsContainer.innerHTML = `
            <div class="animate-pulse p-4 border rounded-lg shadow-sm mb-4">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 bg-gray-200 rounded-full"></div>
                    <div class="flex-1">
                        <div class="h-4 bg-gray-200 rounded w-1/4 mb-2"></div>
                        <div class="h-3 bg-gray-200 rounded w-3/4"></div>
                    </div>
                </div>
            </div>
        `.repeat(2); // Muestra dos "esqueletos" de comentarios

        const response = await fetch(`/api/comments/via/${viaId}`);
        const comments = await response.json();

        if (comments.length === 0) {
            commentsContainer.innerHTML = `
                <div class="text-center py-8">
                    <div class="text-gray-400 mb-2">
                        <i class="fas fa-comments text-3xl"></i>
                    </div>
                    <p class="text-gray-500">No hay comentarios todavía</p>
                    <p class="text-sm text-gray-400">¡Sé el primero en comentar!</p>
                </div>
            `;
            return;
        }

        commentsContainer.innerHTML = comments.map(comment => `
            <div class="bg-white rounded-lg shadow-sm p-4 mb-4" id="comment-${comment.id}">
                <div class="flex items-start gap-3">
                    <img
                        src="/uploads/${comment.usuario.avatar}"
                        alt="${comment.usuario.nombre}"
                        class="w-10 h-10 rounded-full"
                    >
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <p class="font-semibold">${comment.usuario.nombre}</p>
                            <span class="text-xs text-gray-400">${comment.fecha}</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">${comment.texto}</p>
                        ${comment.puntuacion ? `
                            <div class="flex items-center mt-2">
                                ${Array(5).fill().map((_, i) => `
                                    <i class="fas fa-star ${i < comment.puntuacion ? 'text-yellow-400' : 'text-gray-300'}"></i>
                                `).join('')}
                            </div>
                        ` : ''}
                    </div>
                </div>
            </div>
        `).join('');

    } catch (error) {
        console.error('Error al cargar los comentarios:', error);
        commentsContainer.innerHTML = `
            <div class="text-center py-8">
                <div class="text-red-400 mb-2">
                    <i class="fas fa-exclamation-circle text-3xl"></i>
                </div>
                <p class="text-gray-500">Error al cargar los comentarios</p>
                <button onclick="loadComments()" class="text-sm text-blue-500 hover:underline mt-2">
                    Intentar de nuevo
                </button>
            </div>
        `;
    }
}
$(document).ready(function() {
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
    const deleteModal = document.getElementById('deleteModal');
    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
    const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');

    function showModal() {
        deleteModal.classList.remove('hidden');
        deleteModal.querySelector('.bg-white').classList.add('animate-in', 'fade-in', 'duration-200');
    }

    function hideModal() {
        deleteModal.classList.add('hidden');
        currentDeleteButton = null;
    }

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

    var table = $('#zonasTable').DataTable({
        processing: true,
        serverSide: false,
        ajax: {
            url: '/api/zones/list',
            type: 'GET',
            dataSrc: 'data'
        },
        columns: [
            { data: 'nombre' },
            {
                data: 'ubicacion',
                render: function(data) {
                    const coords = data.split(',');
                    return `${coords[0].substring(0,8)}, ${coords[1].substring(0,8)}`;
                }
            },
            { data: 'bloques' },
            { data: 'totalAscensos' },
            {
                data: 'acciones',
                render: function(data) {
                    return `
        <div class="flex gap-2">
            <a href="/admin/zones/view/${data}" class="text-blue-600 hover:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="/admin/zones/update/${data}" class="text-yellow-600 hover:text-yellow-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
            </a>
            <button onclick="showDeleteModal(${data})" data-id="${data}" class="delete-zone-btn text-red-600 hover:text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>`;
                }
            }
        ],
        responsive: true,
        columnDefs: [
            {
                targets: [1, 2, 3, 4],
                className: 'desktop'
            }
        ],
        language: {
            url: '/assets/plugin/DataTables/lang/es-ES.json',
            search: ''
        },
        dom: '<"flex flex-wrap justify-between items-center"f>rtip',
        drawCallback: function() {
            if ($(window).width() <= 768) {
                this.api().cells().every(function() {
                    let data = this.data();
                    let index = this.index().column;
                    if (index === 0) {
                        let row = this.node().parentElement;
                        let id = $(row).find('td:last').find('button').attr('data-id');
                        this.node().innerHTML = `
                            <div class="flex justify-between items-center w-full">
                                <span>${data}</span>
                                <div class="mobile-actions">
                                    <button class="mobile-menu-button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="mobile-menu">
                                        <div class="mobile-menu-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>${$(row).find('td:eq(1)').text()}</span>
                                        </div>
                                        <div class="mobile-menu-item">
                                            <i class="fas fa-cube"></i>
                                            <span>Bloques: ${$(row).find('td:eq(2)').text()}</span>
                                        </div>
                                        <div class="mobile-menu-item">
                                            <i class="fas fa-mountain"></i>
                                            <span>Ascensos: ${$(row).find('td:eq(3)').text()}</span>
                                        </div>
                                        <a href="/admin/zones/view/${id}" class="mobile-menu-item text-blue-600">
                                            <i class="fas fa-eye"></i>
                                            <span>Ver detalles</span>
                                        </a>
                                        <a href="/admin/zones/update/${id}" class="mobile-menu-item text-yellow-600">
                                            <i class="fas fa-edit"></i>
                                            <span>Editar</span>
                                        </a>
                                        <button onclick="showDeleteModal(${id})" class="mobile-menu-item text-red-600">
                                            <i class="fas fa-trash"></i>
                                            <span>Eliminar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        `;
                    }
                });
            }
        }
    });

    async function deleteZona(id, button) {
        try {
            toggleButtonLoader(button, true);
            const response = await fetch(`/api/zones/${id}`, {
                method: 'DELETE'
            });
            const result = await response.json();

            if (result.status === 'success') {
                table.ajax.reload();
                notificationSystem.show('Zona eliminada correctamente', 'success');
                hideModal();
            } else {
                notificationSystem.show(result.message || 'Error al eliminar la zona', 'error');
                toggleButtonLoader(button, false);
            }
        } catch (error) {
            console.error('Error:', error);
            notificationSystem.show('Error de conexión', 'error');
            toggleButtonLoader(button, false);
        }
    }

    window.showDeleteModal = function(id) {
        currentDeleteButton = document.querySelector(`button[data-id="${id}"]`);
        showModal();
    };

    confirmDeleteBtn.addEventListener('click', function() {
        if (currentDeleteButton) {
            const id = currentDeleteButton.dataset.id;
            deleteZona(id, this);
        }
    });

    cancelDeleteBtn.addEventListener('click', hideModal);
    deleteModal.addEventListener('click', function(e) {
        if (e.target === this) hideModal();
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !deleteModal.classList.contains('hidden')) hideModal();
    });

    $(document).on('click', '.mobile-menu-button', function(e) {
        e.stopPropagation();
        $('.mobile-menu').not($(this).next('.mobile-menu')).removeClass('active');
        $(this).next('.mobile-menu').toggleClass('active');
    });

    $(document).on('click', function() {
        $('.mobile-menu').removeClass('active');
    });

    $(document).on('click', '.mobile-menu', function(e) {
        e.stopPropagation();
    });
});
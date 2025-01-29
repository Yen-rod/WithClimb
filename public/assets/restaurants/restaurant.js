// via-detail.js
document.addEventListener('DOMContentLoaded', function() {
    // Gestión de tabs
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

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

});
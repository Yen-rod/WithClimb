// Función para mostrar notificaciones
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `
        fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transform transition-all duration-300 ease-out translate-x-full
        ${type === 'success' ? 'bg-green-50 text-green-800 border border-green-200' : 'bg-red-50 text-red-800 border border-red-200'}
    `;

    notification.innerHTML = `
        <div class="flex items-center gap-3">
            <div class="flex-shrink-0">
                ${type === 'success'
        ? '<i class="fas fa-check-circle text-green-400"></i>'
        : '<i class="fas fa-exclamation-circle text-red-400"></i>'
    }
            </div>
            <div class="flex-1">
                <p class="text-sm font-medium">
                    ${message}
                </p>
            </div>
            <button class="flex-shrink-0 ml-4" onclick="this.parentElement.parentElement.remove()">
                <i class="fas fa-times text-gray-400 hover:text-gray-600"></i>
            </button>
        </div>
    `;

    document.body.appendChild(notification);

    // Animar entrada
    requestAnimationFrame(() => {
        notification.classList.remove('translate-x-full');
        notification.classList.add('translate-x-0');
    });

    // Auto eliminar después de 5 segundos
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => notification.remove(), 300);
    }, 5000);
}

// Manejar subida de fotos
document.addEventListener('DOMContentLoaded', function() {
    const uploadForm = document.getElementById('uploadForm');
    const uploadModal = document.getElementById('uploadModal');

    uploadForm.addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const submitButton = this.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.innerHTML;

        try {
            // Deshabilitar botón y mostrar estado de carga
            submitButton.disabled = true;
            submitButton.innerHTML = `
                <i class="fas fa-spinner fa-spin"></i>
                Subiendo...
            `;

            const response = await fetch('/api/photos/upload', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (data.status === 'success') {
                showNotification('Foto subida correctamente');
                closeModal();
                uploadForm.reset();
            } else {
                showNotification(data.message, 'error');
            }

        } catch (error) {
            console.error('Error:', error);
            showNotification('Error al subir la foto', 'error');
        } finally {
            // Restaurar botón
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;
        }
    });
});
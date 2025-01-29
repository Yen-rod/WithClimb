document.addEventListener('DOMContentLoaded', function() {
    // Referencias a elementos
    const form = document.getElementById('profile-form');
    const avatarInput = document.getElementById('avatar-input');
    const changeAvatarBtn = document.getElementById('change-avatar-btn');
    const currentAvatar = document.getElementById('current-avatar');

    // Cargar datos del perfil
    async function loadProfile() {
        try {
            const response = await fetch('/api/users/profile');
            const data = await response.json();

            document.getElementById('nombre').value = data.nombre;
            document.getElementById('email').value = data.email;
            document.getElementById('genero').value = data.genero;

        } catch (error) {
            showNotification('Error al cargar los datos del perfil', 'error');
        }
    }

    // Manejar cambio de avatar
    changeAvatarBtn.addEventListener('click', () => avatarInput.click());

    avatarInput.addEventListener('change', async function() {
        if (this.files && this.files[0]) {
            const formData = new FormData();
            formData.append('avatar', this.files[0]);

            try {
                const response = await fetch('/api/users/profile/avatar', {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (response.ok) {
                    currentAvatar.src = data.avatar;
                    showNotification('Avatar actualizado correctamente');
                } else {
                    throw new Error(data.error);
                }
            } catch (error) {
                showNotification(error.message, 'error');
            }
        }
    });

    // Manejar envío del formulario
    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = {
            nombre: document.getElementById('nombre').value,
            genero: document.getElementById('genero').value,
        };

        const password = document.getElementById('password').value;
        if (password) {
            formData.password = password;
        }

        try {
            const response = await fetch('/api/users/profile', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            });

            const data = await response.json();

            if (response.ok) {
                showNotification('Perfil actualizado correctamente');
                if (password) {
                    document.getElementById('password').value = '';
                }
            } else {
                throw new Error(data.error || 'Error al actualizar el perfil');
            }
        } catch (error) {
            showNotification(error.message, 'error');
        }
    });

    // Función para mostrar notificaciones
    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `notification ${type === 'success' ? 'bg-green-500' : 'bg-red-500'} text-white px-6 py-4 rounded-lg shadow-lg transform transition-all duration-300 translate-y-full opacity-0`;

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

        const container = document.getElementById('notifications-container');
        container.appendChild(notification);

        // Animar entrada
        requestAnimationFrame(() => {
            notification.classList.remove('translate-y-full', 'opacity-0');
        });

        // Auto eliminar después de 3 segundos
        setTimeout(() => {
            notification.classList.add('translate-y-full', 'opacity-0');
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    // Cargar datos iniciales del perfil
    loadProfile();
});
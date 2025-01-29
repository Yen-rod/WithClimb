// routes-comments.js
document.addEventListener('DOMContentLoaded', function() {
    const commentForm = document.getElementById('commentForm');
    const commentsContainer = document.getElementById('commentsContainer');

    // Crear notificación
    function createNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `
            fixed top-4 right-4 z-50 rounded-lg p-4 mb-4 text-sm 
            ${type === 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'}
            transform transition-transform duration-300 ease-in-out translate-x-full
        `;

        notification.innerHTML = `
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    ${type === 'success'
            ? '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd">'
            : '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd">'
        }
                    </path>
                </svg>
                <span>${message}</span>
            </div>
            <button class="absolute top-1 right-1 text-sm font-semibold p-1" onclick="this.parentElement.remove()">
                ×
            </button>
        `;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.classList.remove('translate-x-full');
            notification.classList.add('translate-x-0');
        }, 10);

        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => notification.remove(), 300);
        }, 5000);
    }

    // Función para añadir un nuevo comentario al DOM
    function addCommentToList(comment) {
        const commentElement = document.createElement('div');
        commentElement.className = 'bg-white rounded-lg shadow-sm p-4 mb-4 animate-fade-in';
        commentElement.innerHTML = `
            <div class="flex items-start gap-3">
                <img src="/uploads/${comment.usuario.avatar}" 
                     alt="${comment.usuario.nombre}" 
                     class="w-10 h-10 rounded-full object-cover">
                <div class="flex-1">
                    <div class="flex items-center justify-between">
                        <p class="font-semibold">${comment.usuario.nombre}</p>
                        <span class="text-xs text-gray-400">${comment.fecha}</span>
                    </div>
                    <p class="text-sm text-gray-600 mt-1">${comment.comentario}</p>
                </div>
            </div>
        `;

        commentsContainer.insertBefore(commentElement, commentsContainer.firstChild);
        let noComments = document.getElementById('no-comments');
        if (noComments !== null) {
            noComments.style.display = 'none';
        }
    }

    // Cargar comentarios existentes
    async function loadComments() {
        try {
            const viaId = commentsContainer.dataset.viaId;
            const response = await fetch(`/api/comments/via/${viaId}`);
            const comments = await response.json();

            if (comments.length === 0) {
                commentsContainer.innerHTML = `
                    <div class="text-center py-8" id="no-comments">
                        <div class="text-gray-400 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
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
                        <img src="/uploads/${comment.usuario.avatar}" 
                             alt="${comment.usuario.nombre}"
                             class="w-10 h-10 rounded-full object-cover">
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <p class="font-semibold">${comment.usuario.nombre}</p>
                                <span class="text-xs text-gray-400">${comment.fecha}</span>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">${comment.texto}</p>
                        </div>
                    </div>
                </div>
            `).join('');

        } catch (error) {
            console.error('Error al cargar los comentarios:', error);
            commentsContainer.innerHTML = `
                <div class="text-center py-8">
                    <div class="text-red-400 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-gray-500">Error al cargar los comentarios</p>
                    <button onclick="loadComments()" class="text-sm text-blue-500 hover:underline mt-2">
                        Intentar de nuevo
                    </button>
                </div>
            `;
        }
    }

    // Manejar envío del formulario
    commentForm.addEventListener('submit', async function(e) {
        e.preventDefault();

        const commentText = this.querySelector('textarea').value.trim();
        const viaId = this.dataset.viaId;

        if (!commentText) {
            createNotification('El comentario no puede estar vacío', 'error');
            return;
        }

        try {
            const response = await fetch('/api/comments/create', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    idVia: viaId,
                    comentario: commentText
                })
            });

            const data = await response.json();

            if (data.status === 'success') {
                // Limpiar formulario
                this.querySelector('textarea').value = '';

                // Añadir comentario a la lista
                addCommentToList(data.comment);

                // Mostrar notificación
                createNotification('Comentario publicado correctamente');
            } else {
                createNotification(data.message || 'Error al publicar el comentario', 'error');
            }
        } catch (error) {
            console.error('Error:', error);
            createNotification('Error de conexión', 'error');
        }
    });

    // Cargar comentarios al iniciar
    loadComments();
});
// restaurant-comments.js
document.addEventListener('DOMContentLoaded', function() {
    const commentForm = document.getElementById('commentForm');
    const commentsContainer = document.getElementById('commentsContainer');

    // Crear notificación [la función se mantiene igual]
    function createNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `
            fixed top-4 right-4 z-50 rounded-lg p-4 mb-4 text-sm 
            ${type === 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'}
            transform transition-transform duration-300 ease-in-out translate-x-full
        `;

    }

    // Función para añadir un nuevo comentario al DOM
    function addCommentToList(comment) {
        const commentElement = document.createElement('div');
        commentElement.className = 'bg-white rounded-lg shadow-sm p-4 mb-4 animate-fade-in';
        commentElement.innerHTML = `
            <div class="flex items-start gap-3">
                <img 
                    src="/uploads/${comment.usuario.avatar}" 
                    alt="${comment.usuario.nombre}" 
                    class="w-10 h-10 rounded-full object-cover"
                >
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
            const restaurantId = commentsContainer.dataset.restaurantId;
            const response = await fetch(`/api/comments/restaurant/${restaurantId}`);
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
                        <img 
                            src="/uploads/${comment.usuario.avatar}" 
                            alt="${comment.usuario.nombre}"
                            class="w-10 h-10 rounded-full object-cover"
                        >
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
        const restaurantId = this.dataset.restaurantId;

        if (!commentText) {
            createNotification('El comentario no puede estar vacío', 'error');
            return;
        }

        try {
            const response = await fetch('/api/comments/restaurant/create', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    idRestaurante: restaurantId,
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
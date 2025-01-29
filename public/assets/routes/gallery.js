let currentPhotoIndex = 0;
let photos = [];

// Función para abrir la galería
function openGalleryModal() {
    document.getElementById('galleryModal').classList.remove('hidden');
    // Prevenir scroll en el body
    document.body.style.overflow = 'hidden';
}

// Función para cerrar la galería
function closeGalleryModal() {
    document.getElementById('galleryModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Cargar fotos de la vía
async function loadPhotos() {

    try {
        const viaId = document.getElementById('galleryModal').dataset.viaId;

        const response = await fetch(`/api/photos/via/${viaId}`);
        photos = await response.json();
    } catch (error) {
        console.error('Error cargando fotos:', error);
    }
}

// Mostrar detalle de foto
function showPhotoDetail(photoId) {
    currentPhotoIndex = photos.findIndex(p => p.id === parseInt(photoId));
    if (currentPhotoIndex === -1) return;

    updatePhotoDetail();
    document.getElementById('photoDetailModal').classList.remove('hidden');
}

// Actualizar detalle de foto
function updatePhotoDetail() {
    const photo = photos[currentPhotoIndex];

    document.getElementById('photoDetailImage').src = `/uploads/photos/${photo.url}`;
    document.getElementById('photoDetailUserAvatar').src = `/uploads/${photo.usuario.avatar}`;
    document.getElementById('photoDetailUserName').textContent = photo.usuario.nombre;
    document.getElementById('photoDetailDescription').textContent = photo.descripcion;
    document.getElementById('photoDetailDate').textContent = new Date(photo.fechaSubida).toLocaleDateString();
}

// Navegar a foto anterior
function previousPhoto() {
    if (currentPhotoIndex > 0) {
        currentPhotoIndex--;
        updatePhotoDetail();
    }
}

// Navegar a foto siguiente
function nextPhoto() {
    if (currentPhotoIndex < photos.length - 1) {
        currentPhotoIndex++;
        updatePhotoDetail();
    }
}

// Cerrar detalle de foto
function closePhotoDetail() {
    document.getElementById('photoDetailModal').classList.add('hidden');
}

// Event Listeners
document.addEventListener('DOMContentLoaded', () => {
    // Cargar fotos al iniciar
    loadPhotos();

    // Vincular botón de galería
    document.querySelector('[data-gallery-button]').addEventListener('click', openGalleryModal);

    // Manejar teclas
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeGalleryModal();
            closePhotoDetail();
        }
        if (e.key === 'ArrowLeft') previousPhoto();
        if (e.key === 'ArrowRight') nextPhoto();
    });
});
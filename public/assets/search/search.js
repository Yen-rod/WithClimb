document.addEventListener('DOMContentLoaded', function() {

// Buscar vías o restaurantes
    function initSearch() {
        const searchInput = document.querySelector('[data-search-input]');
        if (!searchInput) return;

        let searchResults;
        let debounceTimer;

        function createSearchResults() {
            searchResults = document.createElement('div');
            searchResults.className = `
        absolute left-0 right-0 mt-2 
        bg-white rounded-lg shadow-xl 
        border border-gray-200 
        hidden z-50 max-h-[calc(100vh-100px)] 
        overflow-y-auto
        divide-y divide-gray-100
    `;
            searchInput.parentElement.appendChild(searchResults);
        }

        createSearchResults();

        searchInput.addEventListener('input', function (e) {
            clearTimeout(debounceTimer);
            const query = e.target.value.trim();

            if (!query) {
                searchResults.classList.add('hidden');
                return;
            }

            debounceTimer = setTimeout(() => {
                fetch(`/api/search/global?query=${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.vias.length === 0 && data.restaurantes.length === 0) {
                            showNoResults();
                            return;
                        }
                        showResults(data);
                    })
                    .catch(error => console.error('Error:', error));
            }, 300);
        });

        function showResults(data) {
            let html = '';

            if (data.vias.length > 0) {
                html += `<div class="px-4 py-2 text-xs font-semibold text-gray-500 bg-gray-50">VÍAS DE ESCALADA</div>`;
                data.vias.forEach(via => {
                    html += `
                <a href="/usuarios/vias/${via.id}" class="block px-4 py-3 hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2">
                                <span class="font-medium text-gray-900 truncate">${via.nombre}</span>
                                <span class="px-2 py-1 text-xs font-medium bg-blue-50 text-blue-700 rounded-full">
                                    ${via.gradoDificultad}
                                </span>
                            </div>
                            <div class="text-sm text-gray-500 flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="truncate">${via.bloque} • ${via.zona}</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </a>
            `;
                });
            }

            if (data.restaurantes.length > 0) {
                html += `<div class="px-4 py-2 text-xs font-semibold text-gray-500 bg-gray-50">RESTAURANTES</div>`;
                data.restaurantes.forEach(restaurante => {
                    html += `
                <a href="/usuarios/restaurantes/${restaurante.id}" class="block px-4 py-3 hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="font-medium text-gray-900 truncate">${restaurante.nombre}</div>
                            <div class="text-sm text-gray-500 flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="truncate">${restaurante.zona || 'Sin zona asignada'}</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </a>
            `;
                });
            }

            searchResults.innerHTML = html;
            searchResults.classList.remove('hidden');
        }

        function showNoResults() {
            searchResults.innerHTML = `
                <div class="px-4 py-6 text-center text-gray-500">
                    <div class="font-medium">No se encontraron resultados</div>
                    <div class="text-sm">Intenta con otros términos de búsqueda</div>
                </div>
            `;
            searchResults.classList.remove('hidden');
        }

        // Cerrar resultados al hacer click fuera
        document.addEventListener('click', function (e) {
            if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                searchResults.classList.add('hidden');
            }
        });
    }

// Inicializar búsqueda cuando el documento esté listo
    initSearch();
});
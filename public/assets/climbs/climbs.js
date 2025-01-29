document.addEventListener('DOMContentLoaded', function() {
    // Manejo de tabs
    const tabs = document.querySelectorAll('#tabList li');
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            tabs.forEach(t => {
                t.classList.remove('border-yellow-500', 'text-yellow-500');
                t.classList.add('border-transparent');
            });
            this.classList.add('border-yellow-500', 'text-yellow-500');
            this.classList.remove('border-transparent');
        });
    });

    // Manejo de dropdowns desktop
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
        dropdown.querySelector('.dropdown-content').addEventListener('click', (e) => {
            e.stopPropagation();
        });
    });

    // Cerrar dropdowns al hacer click fuera
    document.addEventListener('click', () => {
        dropdowns.forEach(d => d.classList.remove('active'));
    });

});
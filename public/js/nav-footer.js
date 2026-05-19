// Hamburger-Menue Toggle Fuss
document.addEventListener('DOMContentLoaded', () => {

    const footMenuToggle = document.querySelector('.foot-menu-toggle');
    const footNavMenu = document.querySelector('.foot-nav-menu');

    footMenuToggle.addEventListener('click', (e) => {

        e.stopPropagation();
        const expanded = footMenuToggle.getAttribute('aria-expanded') === 'true';
        footMenuToggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
        footNavMenu.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (!e.target.closest('.foot-mobile-nav')) {
            footNavMenu.classList.remove('active');
            footMenuToggle.setAttribute('aria-expanded', 'false');
        }
    });
});

// Hamburger-Menü Toggle
const menuToggle = document.querySelector('.menu-toggle');
const navMenu = document.querySelector('.nav-menu');

menuToggle.addEventListener('click', () => {
    const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
    navMenu.classList.toggle('active');
});

// Schließe Menü bei Klick außerhalb
document.addEventListener('click', (e) => {
    if (!e.target.closest('.mobile-nav')) {
        navMenu.classList.remove('active');
        menuToggle.setAttribute('aria-expanded', 'false');
    }
});

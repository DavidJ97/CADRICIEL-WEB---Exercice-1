import './bootstrap';
document.addEventListener('DOMContentLoaded', (event) => {
    const menuButton = document.querySelector('.menu-button');
    const menuItems = document.querySelector('.menu-items');

    menuButton.addEventListener('click', () => {
        menuItems.style.display = menuItems.style.display === 'none' ? 'block' : 'none';
    });

    // Animation de transition entre les pages
    document.body.style.opacity = '0';
    window.onload = () => {
        document.body.style.transition = 'opacity 0.5s ease';
        document.body.style.opacity = '1';
    };
});
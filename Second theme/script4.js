document.addEventListener('DOMContentLoaded', function () {
    const menuIcon = document.querySelector('.menyikon');
    const navUl = document.querySelector('nav ul');

    menuIcon.addEventListener('click', function () {
        navUl.style.display = (navUl.style.display === 'block' ? '' : 'block');
    });

});
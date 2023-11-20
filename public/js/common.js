const customCursor = document.querySelector('#custom-cursor');
let mouseX = 0;
let mouseY = 0;

//Actualiza la posición del cursor personalizado
function updateCursor() {
    customCursor.style.left = `${mouseX}px`;
    customCursor.style.top = `${mouseY}px`;
}

// Maneja el evento 'mousemove' para actualizar la posición del ratón
document.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY + window.scrollY; // Considera el desplazamiento vertical
    updateCursor();
});

// Añade la clase 'hover' al cursor personalizado cuando el ratón pasa sobre un elemento interactivo
document.querySelectorAll('a, a img, button, input, textarea, select, .interactive').forEach(elem => {
    elem.addEventListener('mouseover', () => {
        customCursor.classList.add('hover');
    });
    elem.addEventListener('mouseout', () => {
        customCursor.classList.remove('hover');
    });
});

// Añade la clase 'explode' al cursor personalizado cuando se hace clic
document.addEventListener('click', () => {
    customCursor.classList.add('explode');

    // Quita la clase 'explode' después de que la animación haya terminado
    setTimeout(() => {
        customCursor.classList.remove('explode');
    }, 1000); // Ajustado a 1s para coincidir con la nueva duración de la animación
});

// Actualiza la posición del cursor al cargar la página
window.addEventListener('load', () => {
    updateCursor();
});

const menuToggle = document.querySelector('#menuToggle');
const menu = document.querySelector('#menu');
const closeMenu = document.querySelector('#closeMenu');

menuToggle.addEventListener('click', () => {
    menu.classList.toggle('active');
    menu.classList.toggle('inactive');
    document.body.classList.toggle('no-scroll');
    closeMenu.style.display = 'block';// Muestra el botón de cerrar cuando se abre el menú
});

closeMenu.addEventListener('click', () => {
    menu.classList.toggle('active');
    menu.classList.toggle('inactive');
    document.body.classList.toggle('no-scroll');
    closeMenu.style.display = 'none';// Oculta el botón de cerrar cuando se cierra el menú
});

// Añade un nuevo evento para el menú hamburguesa
const hamburgerMenuToggle = document.querySelector('#check');

hamburgerMenuToggle.addEventListener('change', () => {
    menu.classList.toggle('active');
    menu.classList.toggle('inactive');
    document.body.classList.toggle('no-scroll');
});


window.onload = function() {
    var artistLink = document.querySelector('.menu-items a[href="/artists"]');

    //COmprueba si el ancho de la ventana del navegador es de 600px o menos
    if (window.innerWidth <= 600){
        //Cambia el enlace para dispositivos móviles
        artistLink.href = "/artists/list";
    }
}

let lastScrollTop = 0;
const header = document.querySelector('header');

//Función para detecatar si el dispositivo es móvil
function isMobile() {
    return window.innerWidth <= 600;
}




const customCursor = document.querySelector('#custom-cursor');

//Mueve el cursor personalizado a la posición del cursor del ratón
document.addEventListener('mousemove', (e) => {
    customCursor.style.left = `${e.pageX}px`;
    customCursor.style.top = `${e.pageY}px`;
});

// Añade la clase 'hover' al cursor personalizado cuando el ratón pasa sobre un elemento interactivo
document.querySelectorAll('a, button, input, textarea, select, .interactive').forEach(elem => {
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
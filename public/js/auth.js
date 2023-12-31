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
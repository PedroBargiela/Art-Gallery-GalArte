const images = [
    {src: 'Felenzi.jpg', title: 'Título 1', description: 'Felenzi', link: '#'},
    {src: 'EliseEekhout.jpg', title: 'Título 2', description: 'Elise Eekhout', link: '#'},
    {src: 'GuoyiLiu.jpg', title: 'Título 3', description: 'Guoyi Liu', link: '#'},
    {src: 'HilaryWinfield.jpg', title: 'Título 4', description: 'Hilary Winfield', link: '#'},
    {src: 'MoryOuattara.jpg', title: 'Título 5', description: 'Mory Ouattara', link: '#'}
];

let currentSlideIndex = 0;

window.onload = function() {
    const swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        loop: true,
        mousewheel: true,
        speed: 1000,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        //scrollbar: {
        //    el: '.swiper-scrollbar',
        //},
    });

    images.forEach(image => {
        const slide = document.createElement('div');
        slide.className = 'swiper-slide';
        
        const img = document.createElement('img');
        img.src = `../images/${image.src}`; 
        
        const content = document.createElement('div');
        content.className = 'slide-content';
        
        const title = document.createElement('h2');
        title.className = 'slide-title';
        title.textContent = image.title;
        
        const description = document.createElement('p');
        description.className = 'slide-description';
        description.textContent = image.description;

        const link = document.createElement('a');
        link.href = image.link; 
        
        link.appendChild(title);
        link.appendChild(description);
        
        content.appendChild(link);

        slide.appendChild(img);
        slide.appendChild(content);
        
        swiper.appendSlide(slide);
    });

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

}


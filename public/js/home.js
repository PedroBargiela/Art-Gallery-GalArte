let intro = document.querySelector('.intro');
let logo = document.querySelector('.intro-header');
let logoSpan = document.querySelectorAll('.text');
let loader = document.querySelector('.loader');
let swiperContainer = document.querySelector('.swiper-container');

//El evento se inicia cuando carga la página
window.addEventListener('load', () => {
    // Anima las letras individuales del logo
    // Esto se hace mediante un bucle que itera a través de las letras (span) y aplica una animación de entrada
    // Cada letra se anima con un retraso incremental para crear un efecto secuencial
    setTimeout(() => {
        logoSpan.forEach((span, idx) => {
            setTimeout(() => {
                span.classList.add('active');
            }, (idx + 1) * 300)
        });

        // Después de un cierto tiempo (3000 milisegundos o 3 segundos), se quita la clase 'active' y se agrega la clase 'fade' a las letras
        // Esto crea un efecto de desvanecimiento de las letras
        setTimeout(() => {
            logoSpan.forEach((span, idx) => {
                setTimeout(() => {
                    span.classList.remove('active');
                    span.classList.add('fade');
                }, (idx + 1) * 50)
            });
        }, 3000);

        // Luego, después de 800 milisegundos o 0.8 segundos, se agrega la clase 'active' al elemento de carga (loader)
        // Esto muestra el loader o indicador de carga en la página
        setTimeout(() => {
            loader.classList.add('active');
        }, 800);

        setTimeout(() => {
            loader.classList.remove('active');
            loader.classList.add('fade');
        },3000);

        // Finalmente, después de 3300 milisegundos o 3.3 segundos, se realiza una transición para ocultar la sección de introducción (intro)
        // y mostrar el contenedor del carrusel (swiperContainer)
        setTimeout(() => {
            intro.style.top = '-100vh';
            swiperContainer.classList.add('show');
        }, 3300);
    });

});

const images = [
    {src: 'Interea.jpg', title: 'INTEREA', description: 'Alfonso Costa', link: '/exhibitions/Interea'},
    {src: 'Rostro2.jpg', title: 'LATEXO DO LABIRINTO', description: 'Antón Patiño', link: '/exhibitions/Latexo-Do-Labirinto'},
    {src: 'Casa2.jpg', title: 'A DERRADEIRA', description: 'Mar Hernández', link: '/exhibitions/A-Derradeira'},
    {src: 'Nube.jpg', title: 'DELIRIOS', description: 'Ramón Conde', link: '/exhibitions/Delirios'},
    {src: 'Serie2.jpg', title: 'EL INSTRUMENTO DE LA SOMBRA', description: ' Sandra Carvalho', link: '/exhibitions/El-Instrumento-De-La-Sombra'}
];

let currentSlideIndex = 0;
//Inicializa el carrusel de la librería Swiper
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
    });

    images.forEach(image => {
        const slide = document.createElement('div');
        slide.className = 'swiper-slide';
        
        const img = document.createElement('img');
        img.src = `../images/home/${image.src}`; 
        
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

    // Añade un nuevo evento para el menú hamburguesa
    const hamburgerMenuToggle = document.querySelector('#check');

    hamburgerMenuToggle.addEventListener('change', () => {
        menu.classList.toggle('active');
        menu.classList.toggle('inactive');
        document.body.classList.toggle('no-scroll');
    });

    var artistLink = document.querySelector('.menu-items a[href="/artists"]');

    //COmprueba si el ancho de la ventana del navegador es de 600px o menos
    if (window.innerWidth <= 600){
        //Cambia el enlace para dispositivos móviles
        artistLink.href = "/artists/list";
    }
}


let intro = document.querySelector('.intro');
let logo = document.querySelector('.intro-header');
let logoSpan = document.querySelectorAll('.text');
let content = document.querySelector('.content');
let lines = document.querySelectorAll('.line');

window.addEventListener('load', () => {
    setTimeout(() => {// 1. Animación de las letras del título
        logoSpan.forEach((span, idx) => {
            setTimeout(() => {
                span.classList.add('active');
            }, Math.random() * 1000)// Cada letra se activa con un retraso aleatorio
        });

        // 2. Desvanecimiento de las letras del título
        setTimeout(() => {
            logoSpan.forEach((span, idx) => {
                setTimeout(() => {
                    span.classList.remove('active');
                    span.classList.add('fade');
                }, (idx + 1) * 50)// Cada letra se desvanece con un retraso
            });
        }, 1500);

        // 3. Animación de líneas en la sección de introducción
        setTimeout(() => {
            lines.forEach(line => line.classList.add('active'))// Activa las líneas
        }, 300);

        // 4. Oculta la sección de introducción y muestra el contenido principal
        setTimeout(() => {
            intro.style.top = '-100vh';
            content.classList.add('show');
        }, 1700);
    });

});

window.onload = function() {
    const images = [
        {src: '/images/artists/AlfonsoCosta/Sin-Titulo.jpg', title:'ALFONSO COSTA', link:'/artists/Alfonso-Costa'},
        {src: '/images/artists/AntonPatiño/Sin-Titulo.jpg', title: 'ANTÓN PATIÑO', link:'/artists/Anton-Patiño'},
        {src: '/images/artists/Aramburu/Hierros.jpeg', title: 'ARAMBURU', link:'/artists/Aramburu'},
        {src: '/images/artists/CarlosAlcolea/La-Ducha.jpg', title: 'CARLOS ALCOLEA', link:'/artists/Carlos-Alcolea'},
        {src: '/images/artists/XoseArtiaga/Sin-Titulo.jpg', title: 'XOSÉ ARTIAGA', link:'/artists/Xose-Artiaga'},
        {src: '/images/artists/JorgeBarbi/Hibernaculo.jpg', title: 'JORGE BARBI', link:'/artists/Jorge-Barbi'},
        {src: '/images/artists/AntonioMurado/Pagina2.jpg', title: 'ANTONIO MURADO', link:'/artists/Antonio-Murado'},
        {src: '/images/artists/AntonLamazares/Sufrido.jpg', title: 'ANTÓN LAMAZARES', link:'/artists/Anton-Lamazares'},
        {src: '/images/artists/AntonSobral/Marina.jpg', title: 'ANTÓN SOBRAL', link:'/artists/Anton-Sobral'},
        {src: '/images/artists/JorgeCastillo/Composicion.jpg', title: 'JORGE CASTILLO', link:'/artists/Jorge-Castillo'},
    ]

    // Configuración del carrusel (Swiper)
    var swiper = new Swiper('.swiper', {
        effect: 'coverflow',
        loop: false,
        centeredSlides: true,
        slidesPerView: 3,
        initialSlide: 1,
        keyboardControl: true,
        mousewheel: true,
        mousewheelControl: true,
        lazyLoading: true,
        preventClicks: false,
        preventClicksPropagation: false,
        lazyLoadingInPrevNext: true,
        spaceBetween: 30,
        coverflowEffect: {
            rotate: 0,
            stretch: 150,
            depth: 200,
            modifier: 1,
            slideShadows : false,
        }
    });

    var customCursor = document.getElementById('custom-cursor');

    // Recorre el arreglo de imágenes y crea diapositivas para el carrusel
    images.forEach(function(image){
        var slide = document.createElement('div');
        slide.className = 'swiper-slide';

        var img = document.createElement('img');
        img.src = image.src;
        img.onclick = function() { window.location.href = image.link; }

        img.addEventListener('mouseover', () => {
            customCursor.classList.add('hover');
        });
        img.addEventListener('mouseout', () => {
            customCursor.classList.remove('hover');
        });

        var title = document.createElement('h2');
        title.textContent = image.title;

        slide.appendChild(img);
        slide.appendChild(title);

        swiper.appendSlide(slide);
    });

}
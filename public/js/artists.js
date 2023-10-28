window.onload = function() {
    const images = [
        {src: '/images/artists/AlfonsoCosta/Sin-Titulo.jpg', title:'Alfonso Costa', link:'/artists/Alfonso-Costa'},
        {src: '/images/artists/AntonPatiño/Sin-Titulo.jpg', title: 'Antón Patiño', link:'/artists/Anton-Patiño'},
        {src: '/images/artists/Aramburu/Hierros.jpeg', title: 'Aramburu', link:'/artists/Aramburu'},
        {src: '/images/artists/CarlosAlcolea/La-Ducha.jpg', title: 'Carlos Alcolea', link:'/artists/Carlos-Alcolea'},
        {src: '/images/artists/XoseArtiaga/Sin-Titulo.jpg', title: 'Xosé Artiaga', link:'/artists/Xose-Artiaga'},
        {src: '/images/artists/JorgeBarbi/Hibernaculo.jpg', title: 'Jorge Barbi', link:'/artists/Jorge-Barbi'},
        {src: '/images/artists/AntonioMurado/Pagina2.jpg', title: 'Antonio Murado', link:'/artists/Antonio-Murado'},
        {src: '/images/artists/AntonLamazares/Sufrido.jpg', title: 'Antón Lamazares', link:'/artists/Anton-Lamazares'},
        {src: '/images/artists/AntonSobral/Marina.jpg', title: 'Antón Sobral', link:'/artists/Anton-Sobral'},
        {src: '/images/artists/JorgeCastillo/Composicion.jpg', title: 'Jorge Castillo', link:'/artists/Jorge-Castillo'},
    ]

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
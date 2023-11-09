let intro = document.querySelector('.intro');
let logo = document.querySelector('.intro-header');
let logoSpan = document.querySelectorAll('.text');
let content = document.querySelector('.works');
let lines = document.querySelectorAll('.line');

window.addEventListener('load', () => {
    setTimeout(() => {
        logoSpan.forEach((span, idx) => {// 1. Animación de las letras del título
            setTimeout(() => {
                span.classList.add('active');
            }, Math.random() * 1000)
        });

        // 2. Desvanecimiento de las letras del título
        setTimeout(() => {
            logoSpan.forEach((span, idx) => {
                setTimeout(() => {
                    span.classList.remove('active');
                    span.classList.add('fade');
                }, (idx + 1) * 50)
            });
        }, 1500);

        // 3. Animación de líneas en la sección de introducción
        setTimeout(() => {
            lines.forEach(line => line.classList.add('active'))
        }, 300);

        // 4. Oculta la sección de introducción y muestra el contenido principal
        setTimeout(() => {
            intro.style.top = '-100vh';
            content.classList.add('show');
        }, 1700);
    });

});

document.addEventListener('DOMContentLoaded', (event)=> {
    let currentPage = 0;
    const itemsPerPage = 24;

    const artworkCards = document.querySelectorAll('.card');
    const loadMoreButton  = document.createElement('button');// Crear un botón "Cargar más"
    loadMoreButton.innerText = 'cargar más';
    loadMoreButton.className = 'load-more-button';
    document.querySelector('.pagination').appendChild(loadMoreButton);

    // Función para mostrar las tarjetas en la página actual
    function showPage(page) {
        for (let i = 0; i < artworkCards.length; i++) {
            // Comprueba si la tarjeta debe mostrarse en la página actual
            if (i < (page + 1) * itemsPerPage) {
                // Muestra la tarjeta al configurar su propiedad display en 'block'
                artworkCards[i].style.display = 'block';
            } else {
                // Oculta la tarjeta al configurar su propiedad display en 'none'
                artworkCards[i].style.display = 'none';
            }
        }

    }

    // Agregar un evento de clic al botón "Cargar más"
    loadMoreButton.addEventListener('click', () => {
        currentPage++;
        showPage(currentPage);
    });

    // Agregar eventos de cambio a los elementos select para filtrar
    document.getElementById('artist-select').addEventListener('change', filterArtworks);
    document.getElementById('type-select').addEventListener('change', filterArtworks);

    // Función para filtrar lo mostrado
    function filterArtworks() {
        const selectedArtist = document.getElementById('artist-select').value;
        const selectedType = document.getElementById('type-select').value;

        let count = 0;

        artworkCards.forEach(card => {
            const artist = card.getAttribute('data-artist');
            const type = card.getAttribute('data-type');

            if ((selectedArtist === 'All' || artist === selectedArtist) 
            && (selectedType === 'All' || type === selectedType)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });

        if (count < artworkCards.length) {
            loadMoreButton.style.display = 'none';
        } else {
            loadMoreButton.style.display = 'block';
        }
    }


    // Mostrar la página inicial de tarjetas
    showPage(currentPage);

});

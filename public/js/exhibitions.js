let intro = document.querySelector('.intro');
let logo = document.querySelector('.intro-header');
let logoSpan = document.querySelectorAll('.text');
let content = document.querySelector('.content-container');
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
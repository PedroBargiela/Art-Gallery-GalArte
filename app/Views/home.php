<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GalArte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/home.css">
</head>

<body class="index">
    <a href="/" class="logo">
        <img src="/assets/LogoGalArte1.png" alt="Logo">
    </a>

    <div class="menu-toggle interactive vertical-text" id="menuToggle">menú</div>
    <div class="inactive" id="menu">
        <a href="/" class="logo">
            <img src="/assets/LogoGalArte1.png" alt="Logo">
        </a>
        <ul class="menu-items">
            <li><a href="exhibitions">Exposiciones</a></li>
            <li><a href="#">Dirección 2</a></li>
            <li><a href="#">Dirección 3</a></li>
            <li><a href="#">Dirección 4</a></li>
        </ul>
        <div class="close-menu interactive vertical-text" id="closeMenu">cerrar</div>
    </div>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Las diapositivas se añadirán aquí con JavaScript -->
        </div>
        <!-- Agrega los controles de Swiper -->
        <div class="swiper-pagination"></div>
        <div class="swiper-scrollbar"></div>
    </div>

    </div>
    <div id="custom-cursor"></div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script type="module" src="/js/home.js"></script>
</body>

</html>
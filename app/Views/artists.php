<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistas</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <!-- Importa los estilos de Swiper, una librería para crear sliders -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/artists.css">
</head>

<body>
    <div class="intro">
        <div class="line"></div>
        <h1 class="intro-header">
            <span class="text">A</span><span class="text">R</span><span class="text">T</span><span class="text">I</span><span class="text">S</span><span class="text">T</span><span class="text">A</span><span class="text">S</span>
        </h1>
        <div class="line"></div>
    </div>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <div class="content">
        <div class="title">
            <h1>ARTISTAS</h1>
            <!---<h1>A</h1>
        <h1>R</h1>
        <h1>T</h1>
        <h1 class="move-right">I</h1>
        <h1>S</h1>
        <h1>T</h1>
        <h1>A</h1>
        <h1>S</h1>--->
        </div>
        <div class="title-right">
            <h1>ARTISTAS</h1>
        </div>
        <div class="artist-list-container">
            <a href="artists/list" class="artist-list">LISTA DE ARTISTAS</a>
        </div>
        <!-- Slider principal -->
        <div class="swiper">
            <!-- Contenedor del carrusel (slider) -->
            <div class="swiper-wrapper">
                <!-- Contenedor de las diapositivas del carrusel -->
                <!-- Las diapositivas se agregan dinámicamente a través de JavaScript -->
            </div>
            <!-- Indicador de paginación del carrusel -->
            <div class="swiper-pagination"></div>

            <!-- Si se necesitan botones de navegación -->


            <!-- Si se necesita scrollbar -->

        </div>
    </div>


    <div id="custom-cursor"></div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script type="module" src="/js/common.js"></script>
    <script type="module" src="/js/artists.js"></script>

</body>

</html>
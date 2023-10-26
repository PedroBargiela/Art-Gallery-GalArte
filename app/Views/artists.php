<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/artists.css">
</head>

<body>
    <header>
        <?= view('partials/header.php') ?>
    </header>
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
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>


    <div id="custom-cursor"></div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" src="/js/artists.js"></script>
    <script type="module" src="/js/common.js"></script>

</body>

</html>
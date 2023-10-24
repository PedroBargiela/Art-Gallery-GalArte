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
    <header>
        <?= view('partials/header.php') ?>
    </header>

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
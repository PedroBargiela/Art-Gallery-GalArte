<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Artistas</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/list.css">
</head>

<body>
    <div class="intro mobile-only">

        <h1 class="intro-header">
            <span class="text">A</span><span class="text">R</span><span class="text">T</span><span class="text">I</span><span class="text">S</span><span class="text">T</span><span class="text">A</span><span class="text">S</span>
        </h1>

    </div>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <h1>Artistas</h1>
    <div class="artist-grid">
        <a href="/artists/Alfonso-Costa">
            <div class="artist-item">
                <img src="/images/artists/AlfonsoCosta/Sin-Titulo.jpg" alt="Alfonso Costa">
                <h2>ALFONSO COSTA</h2>
            </div>
        </a>
        <a href="/artists/Anton-Patiño">
            <div class="artist-item">
                <img src="/images/artists/AntonPatiño/Sin-Titulo.jpg" alt="Antón Patiño">
                <h2>ANTÓN PATIÑO</h2>
            </div>
        </a>
        <a href="/artists/Aramburu">
            <div class="artist-item">
                <img src="/images/artists/Aramburu/Hierros.jpeg" alt="Aramburu">
                <h2>ARAMBURU</h2>
            </div>
        </a>
        <a href="/artists/Carlos-Alcolea">
            <div class="artist-item">
                <img src="/images/artists/CarlosAlcolea/La-Ducha.jpg" alt="Carlos Alcolea">
                <h2>CARLOS ALCOLEA</h2>
            </div>
        </a>
        <a href="/artists/Xose-Artiaga">
            <div class="artist-item">
                <img src="/images/artists/XoseArtiaga/Sin-Titulo.jpg" alt="Xosé Artiaga">
                <h2>XOSÉ ARTIAGA</h2>
            </div>
        </a>
        <a href="/artists/Jorge-Barbi">
            <div class="artist-item">
                <img src="/images/artists/JorgeBarbi/Hibernaculo.jpg" alt="Jorge Barbi">
                <h2>JORGE BARBI</h2>
            </div>
        </a>
        <a href="/artists/Antonio-Murado">
            <div class="artist-item">
                <img src="/images/artists/AntonioMurado/Pagina2.jpg" alt="Antonio Murado">
                <h2>ANTONIO MURADDO</h2>
            </div>
        </a>
        <a href="/artists/Anton-Lamazares">
            <div class="artist-item">
                <img src="/images/artists/AntonLamazares/Sufrido.jpg" alt="Antón Lamazares">
                <h2>ANTÓN LAMAZARES</h2>
            </div>
        </a>
        <a href="/artists/Anton-Sobral">
            <div class="artist-item">
                <img src="/images/artists/AntonSobral/Marina.jpg" alt="Antón Sobral">
                <h2>ANTÓN SOBRAL</h2>
            </div>
        </a>
        <a href="/artists/Jorge-Castillo">
            <div class="artist-item">
                <img src="/images/artists/JorgeCastillo/Composicion.jpg" alt="Jorge Castillo">
                <h2>JORGE CASTILLO</h2>
            </div>
        </a>
        <a href="/artists" class="fixed-button">
            <button class="bttn-stretch bttn-md bttn-primary">volver</button>
        </a>
    </div>

    <footer>
        <?= view('partials/footer.php') ?>
    </footer>

    <div id="custom-cursor"></div>
    <script type="module" src="/js/common.js"></script>
    <script type="module" src="/js/list.js"></script>
</body>

</html>
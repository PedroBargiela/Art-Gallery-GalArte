<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Artistas</title>
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/list.css">
</head>

<body>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <h1>Artistas</h1>
    <div class="artist-grid">
        <a href="/artists/artist1">
            <div class="artist-item">
                <img src="/images/artists/AlfonsoCosta/Sin-Titulo.jpg" alt="Alfonso Costa">
                <h2>Alfonso Costa</h2>
            </div>
        </a>
        <a href="/artists/artist2">
            <div class="artist-item">
                <img src="/images/artists/AntonPatiño/Sin-Titulo.jpg" alt="Antón Patiño">
                <h2>Antón Patiño</h2>
            </div>
        </a>
        <a href="/artists/artist3">
            <div class="artist-item">
                <img src="/images/artists/Aramburu/Hierros.jpeg" alt="Aramburu">
                <h2>Aramburu</h2>
            </div>
        </a>
        <a href="/artists/artist4">
            <div class="artist-item">
                <img src="/images/artists/CarlosAlcolea/La-Ducha.jpg" alt="Carlos Alcolea">
                <h2>Carlos Alcolea</h2>
            </div>
        </a>
        <a href="/artists/artist5">
            <div class="artist-item">
                <img src="/images/artists/XoseArtiaga/Sin-Titulo.jpg" alt="Xosé Artiaga">
                <h2>Xosé Artiaga</h2>
            </div>
        </a>
        <a href="/artists/artist6">
            <div class="artist-item">
                <img src="/images/artists/JorgeBarbi/Hibernaculo.jpg" alt="Jorge Barbi">
                <h2>Jorge Barbi</h2>
            </div>
        </a>
        <a href="/artists/artist7">
            <div class="artist-item">
                <img src="/images/artists/AntonioMurado/Pagina2.jpg" alt="Antonio Murado">
                <h2>Antonio Murado</h2>
            </div>
        </a>
        <a href="/artists/artist8">
            <div class="artist-item">
                <img src="/images/artists/AntonLamazares/Sufrido.jpg" alt="Antón Lamazares">
                <h2>Antón Lamazares</h2>
            </div>
        </a>
        <a href="/artists/artist9">
            <div class="artist-item">
                <img src="/images/artists/AntonSobral/Marina.jpg" alt="Antón Sobral">
                <h2>Antón Sobral</h2>
            </div>
        </a>
        <a href="/artists/artist10">
            <div class="artist-item">
                <img src="/images/artists/JorgeCastillo/Composicion.jpg" alt="Jorge Castillo">
                <h2>Jorge Castillo</h2>
            </div>
        </a>
        <a href="artists" class="fixed-button">
            <button class="bttn-stretch bttn-md bttn-primary">volver</button>
        </a>
        <div id="custom-cursor"></div>
        <script type="module" src="/js/common.js"></script>
</body>

</html>
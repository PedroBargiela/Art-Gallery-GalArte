<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exposiciones</title>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/exhibitions.css">
</head>

<body>
    <a href="/" class="logo">
        <img src="/assets/LogoGalarte1.png " alt="Logo">
    </a>

    <div class="menu-toggle interactive vertical-text" id="menuToggle">menú</div>
    <div class="inactive" id="menu">
        <a href="/" class="logo">
            <img src="assets/LogoGalArte.svg" alt="Logo">
        </a>
        <ul class="menu-items">
            <li><a href="exhibitions">Exposiciones</a></li>
            <li><a href="#">Dirección 2</a></li>
            <li><a href="#">Dirección 3</a></li>
            <li><a href="#">Dirección 4</a></li>
        </ul>
        <div class="close-menu interactive vertical-text" id="closeMenu">cerrar</div>
    </div>
    <h1>Exposiciones</h1>
    <img class="img-exhibitions" src="images/exhibitions.jpg" alt="Exposiciones">
    <hr>
    <div class="content-container">
        <div class="exhibition">
            <img src="/images/Felenzi.jpg" alt="Falenzi Exp.">
            <div class="info right">
                <h2>Título de la exposición 1</h2>
                <p>Información de la exposición 1</p>
            </div>
        </div>
        <a href="#" class="hbtn hb-fill-middle-bg" id="button-info">Más Información</a>
        <div class="exhibition reverse">
            <img src="/images/EliseEekhout.jpg" alt="Elise Eekhout Exp.">
            <div class="info">
                <h2>Título de la exposición 2</h2>
                <p>Información de la exposición 2</p>
            </div>
        </div>
        <div class="exhibition">
            <img src="/images/GuoyiLiu.jpg" alt="Guoyi Liu Exp.">
            <div class="info right">
                <h2>Título de la exposición 3</h2>
                <p>Información de la exposición 3</p>
            </div>
        </div>
        <div class="exhibition reverse">
            <img src="/images/HilaryWinfield.jpg" alt="Hilary Winfield Exp.">
            <div class="info">
                <h2>Título de la exposición 4</h2>
                <p>Información de la exposición 4</p>
            </div>
        </div>
        <div class="exhibition">
            <img src="/images/MoryOuattara.jpg" alt="Mory Ouattara Exp.">
            <div class="info right">
                <h2>Título de la exposición 5</h2>
                <p>Información de la exposición 5</p>
            </div>
        </div>
    </div>

    <div id="custom-cursor"></div>
    <script type="module" src="/js/common.js"></script>
</body>

</html>
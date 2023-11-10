<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exposiciones</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="/css/exhibitions.css">
    <link rel="stylesheet" href="/css/common.css">
</head>

<body>
    <div class="intro">
        <div class="line"></div>
        <h1 class="intro-header">
            <span class="text">E</span><span class="text">X</span><span class="text">P</span><span class="text">O</span><span class="text">S</span><span class="text">I</span><span class="text">C</span><span class="text">I</span><span class="text">O</span><span class="text">N</span><span class="text">E</span><span class="text">S</span>
        </h1>
        <div class="line"></div>
    </div>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <h1>EXPOSICIONES</h1>
    <img class="img-exhibitions" src="images/exhibitions.jpg" alt="Exposiciones">
    <hr>
    <h2>en activo</h2>
    <h2>desde xx/xx/xxxx</h2>
    <h2>hasta xx/xx/xxxx</h2>
    <div class="content-container">
        <div class="exhibition">
            <a href="/exhibitions/Interea">
                <img src="/images/home/Interea.jpg" alt="Interea Exp.">
                <div class="info right">
                    <h2>Interea</h2>
            </a>
            <p>Exposición de Alfonso Costa</p>
        </div>
    </div>
    <div class="exhibition reverse">
        <a href="/exhibitions/Latexo-Do-Labirinto">
            <img src="/images/home/Rostro.jpg" alt="Latexo Exp.">
            <div class="info">
                <h2>Latexo Do Labirinto</h2>
        </a>
        <p>Exposición de Antón Patiño</p>
    </div>
    </div>
    <div class="exhibition">
        <a href="/exhibitions/A-Derradeira">
            <img src="/images/home/Casa.jpg" alt="Mar Hernández Exp.">
            <div class="info right">
                <h2>A Derradeira</h2>
        </a>
        <p>Exposición de Mar Hernández</p>
    </div>
    </div>
    <div class="exhibition reverse">
        <a href="/exhibitions/Delirios">
            <img src="/images/home/Nube.jpg" alt="Ramón Conde Exp.">
            <div class="info">
                <h2>Delirios</h2>
        </a>
        <p>Exposición de Ramón Conde</p>
    </div>
    </div>
    <div class="exhibition">
        <a href="/exhibitions/El-Instrumento-De-La-Sombra">
            <img src="/images/home/Serie.jpg" alt="Sandra Carvalho Exp.">
            <div class="info right">
                <h2>EL INSTRUMENTO DE LA SOMBRA</h2>
        </a>
        <p>Exposición de Sandra Carvalho</p>
    </div>
    </div>
    </div>

    <footer>
        <?= view('partials/footer.php') ?>
    </footer>

    <div id="custom-cursor"></div>
    <script type="module" src="/js/common.js"></script>
    <script type="module" src="/js/exhibitions.js"></script>
</body>

</html>
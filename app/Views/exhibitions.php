<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exposiciones</title>
    <link rel="stylesheet" href="/css/exhibitions.css">
    <link rel="stylesheet" href="/css/home.css">
</head>

<body>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <h1>Exposiciones</h1>
    <img class="img-exhibitions" src="images/exhibitions.jpg" alt="Exposiciones">
    <hr>
    <h2>en activo</h2>
    <h2>desde xx/xx/xxxx</h2>
    <h2>hasta xx/xx/xxxx</h2>
    <div class="content-container">
        <div class="exhibition">
            <img src="/images/home/Felenzi.jpg" alt="Falenzi Exp.">
            <div class="info right">
                <a href="exhibitions/exhibition1">
                    <h2>Título de la exposición 1</h2>
                </a>
                <p>Falenzi</p>
            </div>
        </div>
        <div class="exhibition reverse">
            <img src="/images/home/EliseEekhout.jpg" alt="Elise Eekhout Exp.">
            <div class="info">
                <a href="#">
                    <h2>Título de la exposición 2</h2>
                </a>
                <p>Elise Eekhout</p>
            </div>
        </div>
        <div class="exhibition">
            <img src="/images/home/GuoyiLiu.jpg" alt="Guoyi Liu Exp.">
            <div class="info right">
                <a href="#">
                    <h2>Título de la exposición 3</h2>
                </a>
                <p>Guoyi Liu</p>
            </div>
        </div>
        <div class="exhibition reverse">
            <img src="/images/home/HilaryWinfield.jpg" alt="Hilary Winfield Exp.">
            <div class="info">
                <a href="#">
                    <h2>Título de la exposición 4</h2>
                </a>
                <p>Hilary Winfield</p>
            </div>
        </div>
        <div class="exhibition">
            <img src="/images/home/MoryOuattara.jpg" alt="Mory Ouattara Exp.">
            <div class="info right">
                <a href="#">
                    <h2>Título de la exposición 5</h2>
                </a>
                <p>Mory Ouattara</p>
            </div>
        </div>
    </div>

    <div id="custom-cursor"></div>
    <script type="module" src="/js/common.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obras</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/works.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <div class="intro">
        <div class="line"></div>
        <h1 class="intro-header">
            <span class="text">O</span><span class="text">B</span><span class="text">R</span><span class="text">A</span><span class="text">S</span>
        </h1>
        <div class="line"></div>
    </div>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <div id="custom-cursor"></div>

    <form id="filter-form">
        <select id="artist-select">
            <option value="All">Todos los artistas</option>
            <option value="Alfonso Costa">Alfonso Costa</option>
            <option value="Ánxel Huete">Ánxel Huete</option>
            <option value="Antonio Murado">Antonio Murado</option>
            <option value="Antón Lamazares">Antón Lamazares</option>
            <option value="Antón Patiño">Antón Patiño</option>
            <option value="Antón Pulido">Antón Pulido</option>
            <option value="Antón Sobral">Antón Sobral</option>
            <option value="Aramburu">Aramburu</option>
            <option value="Carlos Alcolea">Carlos Alcolea</option>
            <option value="Deside">Deside</option>
            <option value="Eloy Hernández">Eloy Hernández</option>
            <option value="Jorge Barbi">Jorge Barbi</option>
            <option value="Jorge Castillo">Jorge Castillo</option>
            <option value="Lugrís Vadillo">Lugrís Vadillo</option>
            <option value="Mar Hernández">Mar Hernández</option>
            <option value="Nacho Costa">Nacho Costa</option>
            <option value="Pilar Alonso">Pilar Alonso</option>
            <option value="Ramón Conde">Ramón Conde</option>
            <option value="Sandra Carvalho">Sandra Carvalho</option>
            <option value="Seoane">Seoane</option>
            <option value="Silveiro Rivas">Silveiro Rivas</option>
        </select>
        <select id="type-select">
            <option value="All">Todos los tipos</option>
            <option value="Pintura">Pintura</option>
            <option value="Escultura">Escultura</option>
        </select>
    </form>

    <div class="works">
        <?php foreach ($works as $work) : ?>
            <div class="card" data-artist="<?= $work['artist'] ?>" data-type="<?= $work['type'] ?>">
                <a href="/works/<?= nameToUrl($work['name']) ?>">
                    <div class="artwork">
                        <img src="<?= base_url($work['image']) ?>" alt="<?= $work['name'] ?>">
                    </div>
                    <div class="artwork-info">
                        <h2><?= $work['name'] ?></h2>
                        <p><?= $work['artist'] ?></p>
                        <p><?= $work['price'] ?>€</p>
                    </div>
                </a>
                <button>
                    <a href="/works/addToCart/<?= $work['id'] ?>" class="addToCart">Añadir al carrito</a>
                </button>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
    </div>

    <footer>
        <?= view('partials/footer.php') ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="module" src="/js/works.js"></script>
    <script type="module" src="/js/common.js"></script>
</body>

</html>
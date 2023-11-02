<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="/css/all-artists.css">
    <link rel="stylesheet" href="/css/common.css">
</head>

<body>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <div class="part_artists">
        <h1><?= esc($name) ?></h1>
        <h2><?= esc($origin) ?></h2>
        <img class="title-img" src="<?= esc($image_title) ?>" alt="Imagen referente al nombre">
        <hr>
        <p><?= esc($paragraph1) ?></p>
        <div class="row">
            <div class="col1">
                <img src="<?= esc($image1_1) ?>" alt="Imagen 1 del bloque 1">
            </div>
            <div class="col2">
                <img src="<?= esc($image1_2) ?>" alt="Imagen 2 del bloque 1">
            </div>
        </div>
        <p><?= esc($paragraph2) ?></p>
        <div class="whole-row">
            <img class="whole-row-img" src="<?= esc($image2) ?>" alt="Imagen 2">
        </div>
        <p><?= esc($paragraph3) ?></p>
        <div class="row">
            <div class="col1">
                <img src="<?= esc($image3_1) ?>" alt="Imagen 1 del bloque 3">
            </div>
            <div class="col2">
                <img src="<?= esc($image3_2) ?>" alt="Imagen 2 del bloque 3">
            </div>
        </div>
        <a href="<?= esc($button_link1) ?>" class="fixed-button1">
            <button class="bttn-stretch bttn-md bttn-primary"><?= esc($button_text1) ?></button>
        </a>
        <a href="<?= esc($button_link2) ?>" class="fixed-button2">
            <button class="bttn-stretch bttn-md bttn-primary"><?= esc($button_text2) ?></button>
        </a>
        <a href="<?= esc($button_link_works) ?>" class="fixed-button-works">
            <button class="bttn-stretch bttn-md bttn-primary"><?= esc($button_text_works) ?></button>
        </a>
    </div>

    <footer>
        <?= view('partials/footer.php') ?>
    </footer>

    <div id="custom-cursor"></div>
    <script type="module" src="/js/common.js"></script>
</body>

</html>
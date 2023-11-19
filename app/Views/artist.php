<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (!empty($artist) && is_array($artist)) : ?>
        <title><?= esc($artist['title']) ?></title>
    <?php else : ?>
        <p>Artist Not Found</p>
    <?php endif; ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="/css/all-artists.css">
    <link rel="stylesheet" href="/css/common.css">

</head>

<body>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <?php if (!empty($artist) && is_array($artist)) : ?>
        <div class="part_artists">
            <h1><?= esc($artist['title']) ?></h1>
            <h2><?= esc($artist['origin']) ?></h2>
            <img class="title-img" src="<?= esc($artist['image_title']) ?>" alt="Imagen referente al nombre">
            <p><?= esc($artist['paragraph1']) ?></p>
            <div class="row">
                <div class="col1">
                    <img src="<?= esc($artist['image1_1']) ?>" alt="Imagen 1 del bloque 1">
                </div>
                <div class="col2">
                    <img src="<?= esc($artist['image1_2']) ?>" alt="Imagen 2 del bloque 1">
                </div>
            </div>
            <p><?= esc($artist['paragraph2']) ?></p>
            <div class="whole-row">
                <img class="whole-row-img" src="<?= esc($artist['image2']) ?>" alt="Imagen 2">
            </div>
            <p><?= esc($artist['paragraph3']) ?></p>
            <div class="row">
                <div class="col1">
                    <img src="<?= esc($artist['image3_1']) ?>" alt="Imagen 1 del bloque 3">
                </div>
                <div class="col2">
                    <img src="<?= esc($artist['image3_2']) ?>" alt="Imagen 2 del bloque 3">
                </div>
            </div>
        <?php else : ?>
            <p>Artist Not Found</p>
        <?php endif; ?>
        <!--- Botones sacados de https://bttn.surge.sh/ -->
        <!--<a href=" esc($button_link1) ?>" class="fixed-button1">
            <button class="bttn-stretch bttn-md bttn-primary"><strong> esc($button_text1) ?></strong></button>
        </a>
        <a href=" esc($button_link2) ?>" class="fixed-button2">
            <button class="bttn-stretch bttn-md bttn-primary"><strong> esc($button_text2) ?></strong></button>
        </a>
        <a href=" esc($button_link_works) ?>" class="fixed-button-works">
            <button class="bttn-stretch bttn-md bttn-primary"><strong> esc($button_text_works) ?></strong></button>
        </a>-->
        </div>

        <footer>
            <?= view('partials/footer.php') ?>
        </footer>

        <div id="custom-cursor"></div>

        <script type="module" src="/js/common.js"></script>
        <script type="module" src="/js/login.js"></script>
</body>

</html>
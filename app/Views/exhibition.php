<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (!empty($exhibition) && is_array($exhibition)) : ?>
        <title><?= esc($exhibition['title']) ?></title>
    <?php else : ?>
        <p>Exhibition Not Found</p>
    <?php endif; ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="/css/all-exhibitions.css">
    <link rel="stylesheet" href="/css/common.css">
</head>

<body>
    <div id="custom-cursor"></div>

    <header>
        <?= view('partials/header.php') ?>
    </header>
    <?php if (!empty($exhibition) && is_array($exhibition)) : ?>
        <div class="part_exhibitions">
            <h1><?= esc($exhibition['title']) ?></h1>
            <img class="title-img" src="<?= esc($exhibition['image_title']) ?>" alt="Imagen referente al título">
            <p><?= esc($exhibition['paragraph1']) ?></p>
            <div class="row">
                <div class="col1">
                    <img src="<?= esc($exhibition['image1_1']) ?>" alt="Imagen 1 del bloque 1">
                </div>
                <div class="col2">
                    <img src="<?= esc($exhibition['image1_2']) ?>" alt="Imagen 2 del bloque 1">
                </div>
            </div>
            <p><?= esc($exhibition['paragraph2']) ?></p>
            <div class="whole-row">
                <img class="whole-row-img" src="<?= esc($exhibition['image2']) ?>" alt="Imagen 2">
            </div>
            <p><?= esc($exhibition['paragraph3']) ?></p>
            <div class="row">
                <div class="col1">
                    <img src="<?= esc($exhibition['image3_1']) ?>" alt="Imagen 1 del bloque 3">
                </div>
                <div class="col2">
                    <img src="<?= esc($exhibition['image3_2']) ?>" alt="Imagen 2 del bloque 3">
                </div>
            </div>
        <?php else : ?>
            <p>Exhibition Not Found</p>
        <?php endif; ?>
        <footer>
            <?= view('partials/footer.php') ?>
        </footer>
        <!--<div class="buttons">
                <a href="" class="fixed-button1">
                    <button class="bttn-stretch bttn-md bttn-primary"><strong></strong></button>
                </a>
                <a href="" class="fixed-button2">
                    <button class="bttn-stretch bttn-md bttn-primary"><strong></strong></button>
            </div>-->
        </div>


        <script type="module" src="/js/common.js"></script>
</body>

</html>
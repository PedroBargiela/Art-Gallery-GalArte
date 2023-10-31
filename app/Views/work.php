<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="/css/all-works.css">
    <link rel="stylesheet" href="/css/common.css">
</head>

<body>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <div class="part_works">
        <h1><?= esc($name) ?></h1>
        <h2><?= esc($author) ?></h2>
        <img class="img_work" src="<?= esc($image_work) ?>" alt="Imágen de la obra">
        <p><?= esc($type) ?></p>
        <p><?= esc($dimensions) ?></p>
        <p><?= esc($year) ?></p>


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



    <div id="custom-cursor"></div>
    <script type="module" src="/js/common.js"></script>
</body>

</html>
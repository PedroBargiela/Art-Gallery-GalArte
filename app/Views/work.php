<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>

    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/all-works.css">
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
        <hr>


        <a href="<?= esc($button_link1) ?>" class="fixed-button1">
            <button class="bttn-stretch bttn-md bttn-primary"><?= esc($button_text1) ?></button>
        </a>
        <a href="<?= esc($button_link2) ?>" class="fixed-button2">
            <button class="bttn-stretch bttn-md bttn-primary"><?= esc($button_text2) ?></button>
        </a>
        <a href="<?= esc($button_link_works) ?>" class="fixed-button-works">
            <button class="bttn-stretch bttn-md bttn-primary"><?= esc($button_text_works) ?></button>
        </a>

        <p>
            Si estás interesado en obtener esta obra
            <br>o quieres obtener una información mas detalla de ella,
            <br>rellena este formularios y te contactaremos proporcionándote la información.
        </p>
    </div>
    <form action="/form/send" method="post">
        <div class="container">
            <div class="card">
                <a class="information">Solicita Información</a>

                <div class="inputBox">
                    <input type="text" name="name" required="required">
                    <span class="neme">Nombre</span>
                </div>

                <div class="inputBox">
                    <input type="text" name="work-name" required="required">
                    <span>Nombre de la Obra</span>
                </div>

                <div class="inputBox">
                    <input type="email" name="email" required="required">
                    <span>Email</span>
                </div>

                <div class="inputBox">
                    <input type="direction" name="direction" required="required">
                    <span>Dirección de Envío</span>
                </div>

                <div class="inputBox">
                    <textarea name="message" required="required"></textarea>
                    <span>Escribe tu Mensaje</span>
                </div>

                <button type="submit" class="enter">Enviar</button>

            </div>
        </div>
    </form>



    <div id="custom-cursor"></div>
    <script type="module" src="/js/common.js"></script>
</body>

</html>
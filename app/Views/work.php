<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/all-works.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
            <button class="bttn-stretch bttn-md bttn-primary"><strong><?= esc($button_text1) ?></strong></button>
        </a>
        <a href="<?= esc($button_link2) ?>" class="fixed-button2">
            <button class="bttn-stretch bttn-md bttn-primary"><strong><?= esc($button_text2) ?></strong></button>
        </a>
        <a href="<?= esc($button_link_works) ?>" class="fixed-button-works">
            <button class="bttn-stretch bttn-md bttn-primary"><strong><?= esc($button_text_works) ?></strong></button>
        </a>

        <p>
            Si estás interesado en obtener esta obra
            <br>o quieres obtener una información mas detalla de ella,
            <br>rellena este formularios y te contactaremos facilitándote la información.

        </p>
    </div>
    <!-- Formulario sacado de: https://uiverse.io/JkHuger/afraid-frog-82-->
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
                    <span>Nombre de la Obra y Artista</span>
                </div>

                <div class="inputBox">
                    <input type="email" name="email" required="required">
                    <span>Email</span>
                </div>

                <div class="inputBox">
                    <textarea name="message" required="required"></textarea>
                    <span>Escribe tu Mensaje</span>
                </div>

                <button type="submit" class="enter">Enviar</button>

            </div>
        </div>
    </form>
    <p class="end">
        <br>En caso de no recibir la información por nuestra parte,
        <br>puedes contactar directamente con nosotros.
    </p>
    <footer>
        <?= view('partials/footer.php') ?>
    </footer>

    <div id="custom-cursor"></div>
    <script type="module" src="/js/common.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form").on("submit", function(event) { // Agrega un controlador de eventos para el evento "submit" en todos los formularios de la página.
                event.preventDefault(); // Previene la acción predeterminada de envío del formulario, que sería una recarga de la página.

                // Inicia una solicitud AJAX cuando se envía el formulario
                $.ajax({
                    url: '/form/send',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        //Muestra la notificación de éxito
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-center",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "3000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        toastr.success('¡Mensaje enviado con éxito!');
                    }
                });
            });
        });
    </script>

</body>

</html>

</body>

</html>
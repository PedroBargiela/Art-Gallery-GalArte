<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="intro">
        <div class="line"></div>
        <h1 class="intro-header">
            <span class="text">C</span><span class="text">O</span><span class="text">N</span><span class="text">T</span><span class="text">A</span><span class="text">C</span><span class="text">T</span><span class="text">O</span>
        </h1>
        <div class="line"></div>
    </div>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <div class="container">
        <div class="column">
            <div class="block">
                <h4>
                    Dónde estamos
                </h4>
                <p>
                    Calle XXXXXXXXX XXXXX XXX XX
                    <br>
                    33333 XXXXXXXXX, XXXXXX
                </p>
            </div>
            <div class="block">
                <h4>
                    Contacto
                </h4>
                <p>
                    (+XX) XXX XXX XXX
                    <br>
                    galeria@galarte.com
                </p>
            </div>
            <div class="block">
                <h4>
                    Nuestro Horario
                </h4>
                <p>
                    De Lunes a Sábados
                    <br>
                    Desde las 9:00 a 14:00
                    <br>
                    Y de 16:00 a 20:00
                </p>
            </div>
        </div>
        <div class="social-media">
            <ul class="icons">
                <li>
                    <a class="facebook" href="https://facebook.com" target="_blank">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="https://twitter.com" target="_blank">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a class="instagram" href="https://instagram.com" target="_blank">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="map">
            <!-- Mapa de Google Maps incrustado -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2923.7572255636614!2d-8.544250325170834!3d42.87796808766531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2efe46e68c3e13%3A0x6ef2be9ef4c7a84d!2sGaleria%20de%20Arte%20Luisa%20Pita!5e0!3m2!1ses!2ses!4v1698919375536!5m2!1ses!2ses" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <footer>
        <?= view('partials/footer.php') ?>
    </footer>

    <div id="custom-cursor"></div>
    <script type="module" src="/js/common.js"></script>
    <script type="module" src="/js/contact.js"></script>
</body>

</html>
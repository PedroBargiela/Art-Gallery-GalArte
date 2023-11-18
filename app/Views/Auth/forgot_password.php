<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olvidó su contraseña</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="/css/forgot_password.css">
</head>

<body>
    <a href="/" class="logo" id="logo">
        <img src="/assets/LogoGalArte1.png" alt="Logo">
    </a>
    <div class="container">
        <div class="card">
            <a class="login">Restablecer contraseña</a>
            <hr>
            <form action="/auth/send_reset_link" method="post" autocomplete="off">
                <?= csrf_field(); ?>

                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>
                <div class="inputBox">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?= set_value('email') ?>" required="required">

                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : ''  ?></span>
                </div>
                <button class="enter btn btn-primary btn-block" type="submit">Enviar enlace</button>
                <br>
                ¿Recuerdas tu contraseña? <a href="/auth">Inicia sesión</a>
            </form>
        </div>
    </div>
    <div id="custom-cursor"></div>

    <script type="module" src="/js/auth.js"></script>
</body>

</html>
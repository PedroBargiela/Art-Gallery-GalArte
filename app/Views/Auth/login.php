<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="/css/login.css">

</head>

<body>
    <a href="/" class="logo" id="logo">
        <img src="/assets/LogoGalArte1.png" alt="Logo">
    </a>
    <div class="container">
        <div class="card">
            <a class="login">Iniciar Sesión</a>
            <hr>
            <form action="/auth/check" method="post" autocomplete="off">
                <?= csrf_field(); ?>

                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>
                <div class="inputBox">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?= set_value('email') ?>" required="required">

                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : ''  ?></span>
                </div>
                <div class="inputBox">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password" required="required">

                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : ''  ?></span>
                    <a href="/auth/forgot_password" class="float-right">
                        Olvidaste tu contraseña?
                    </a>
                </div>
                <button class="enter btn btn-primary btn-block" type="submit">Iniciar Sesión</button>
                <br>
                No tienes cuenta?<a href="/auth/register"> Crea una nueva</a>
            </form>
        </div>
    </div>
    <div id="custom-cursor"></div>

    <script type="module" src="/js/auth.js"></script>
</body>

</html>
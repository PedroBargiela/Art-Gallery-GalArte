<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">

    <link rel="stylesheet" href="/css/profile.css">
</head>

<body>
    <header>
        <a href="/" class="logo">
            <img src="/assets/LogoGalArte1.png" alt="Logo">
        </a>

        <div class="menu-toggle interactive vertical-text" id="menuToggle"><strong>menú</strong></div>
        <div class="inactive" id="menu">
            <a href="/" class="logo" id="logo">
                <img src="/assets/LogoGalArte1.png" alt="Logo">
            </a>
            <ul class="menu-items" id="menu-items">
                <li><a href="/exhibitions">Exposiciones</a></li>
                <li><a href="/artists">Artistas</a></li>
                <li><a href="/works">Obras</a></li>
                <li><a href="/contact">Contacto</a></li>
            </ul>
            <div class="close-menu interactive vertical-text" id="closeMenu">cerrar</div>
        </div>
    </header>
    <form class="form" action="/profile/update" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <div class="title">Bienvenido,<br><span><?= isset($user['username']) ? $user['username'] : '' ?></span></div>
        <input type="text" placeholder="Nombre" name="username" class="input" value="<?= isset($user['username']) ? $user['username'] : '' ?>">
        <input type="email" placeholder="Correo" name="email" class="input" value="<?= isset($user['email']) ? $user['email'] : '' ?>">
        <input type="text" placeholder="Número de teléfono" name="phone" class="input" value="<?= isset($user['phone']) ? $user['phone'] : '' ?>">
        <input type="text" placeholder="País" name="country" class="input" value="<?= isset($user['country']) ? $user['country'] : '' ?>">
        <input type="text" placeholder="Código Postal" name="postal_code" class="input" value="<?= isset($user['postal_code']) ? $user['postal_code'] : '' ?>">
        <input type="text" placeholder="Dirección" name="address" class="input" value="<?= isset($user['address']) ? $user['address'] : '' ?>">
        <div class="button-container">
            <button class="button-confirm" id="logoutButton"><a href="/auth/logout">Cerrar Sesión</a></button>
            <button class="button-confirm" id="saveButton" disabled>Guardar</button>
            <button class="button-confirm" id="passwordButton"><a href="/auth/forgot_password">Cambiar Contraseña</a></button>
        </div>
    </form>

    <div id="custom-cursor"></div>
    <script type="module" src="js/common.js"></script>
    <script type="module" src="/js/profile.js"></script>
</body>

</html>
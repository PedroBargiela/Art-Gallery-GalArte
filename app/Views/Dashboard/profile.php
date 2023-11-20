<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/profile.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <header>
        <div class="navbar">
            <a href="/" class="logo">
                <img src="/assets/LogoGalArte1.png" alt="Logo">
            </a>

            <!-- Añade el nuevo código del menú hamburguesa aquí -->
            <label class="menuButton" for="check" style="display: none;">
                <input type="checkbox" id="check">
                <span class="top"></span>
                <span class="mid"></span>
                <span class="bot"></span>
            </label>

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
            <div class="button-wrapper2">
                <button class="button button2">
                    <svg width="30" height="30" class="svgIcon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 18 21">
                        <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                </button>
            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
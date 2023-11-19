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
<?php if ($isLoggedIn) : ?>
    <div class="button-wrapper">
        <a href="/profile" class="button button1 logged-in">
            <svg width="30" height="30" class="svgIcon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 14 18">
                <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
            </svg>
        </a>
    </div>
<?php else : ?>
    <div class="button-wrapper">
        <a href="/auth" class="button button1">
            <svg width="30" height="30" class="svgIcon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 14 18">
                <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
            </svg>
        </a>
    </div>
<?php endif; ?>
<div class="button-wrapper2">
    <button class="button button2">
        <svg width="30" height="30" class="svgIcon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 18 21">
            <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
        </svg>
    </button>
</div>
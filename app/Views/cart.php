<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/cart.css">
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
        </div>
    </header>

    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Carrito</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted"><?= session()->get('cart') ? count(session()->get('cart')) : 0 ?> items</div>
                    </div>
                </div>
                <?php $cart = session()->get('cart') ?: []; ?>
                <?php foreach ($cartItems as $item) : ?>


                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="<?= $item['image'] ?>"></div>
                            <div class="col">
                                <div class="row text-muted"><?= $item['name'] ?></div>
                                <div class="row"><?= $item['artist'] ?></div>
                            </div>
                            <div class="col">
                                <a href="/cart/decreaseQuantity/<?= $item['id'] ?>">-</a><a href="#" class="border"><?= $item['quantity'] ?></a><a href="/works/addToCart/<?= $item['id'] ?>">+</a>
                            </div>
                            <div class="col">&euro; <?= $item['price'] ?> <a href="/cart/removeItem/<?= $item['id'] ?>"><span class="close">&#10005;</span></a></div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="back-to-shop"><a href="/works">&leftarrow;<span class="text-muted"> Volver a Obras</span></a></div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5><b>Resúmen</b></h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">ITEMS <?= session()->get('cart') ? count(session()->get('cart')) : 0 ?></div>
                    <div class="col text-right">&euro; <?= $totalPrice ?></div>
                </div>
                <form>
                    <p>Envío</p>
                    <select>
                        <option class="text-muted">Envío Estándar- &euro;100.00</option>
                    </select>
                    <p>Introduce Código de Descuento</p>
                    <input id="code" placeholder="Enter your code">
                </form>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL</div>
                    <div class="col text-right">&euro; <?= $totalPrice + 100 ?></div>
                </div>
                <button class="btn">CHECKOUT</button>
            </div>
        </div>
    </div>
    <script>
        $(".decreaseQuantity").click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: '/cart/decreaseQuantity/' + id,
                success: function(result) {
                    // Actualiza la vista del carrito aquí
                }
            });
        });

        $(".removeItem").click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: '/cart/removeItem/' + id,
                success: function(result) {
                    // Actualiza la vista del carrito aquí
                }
            });
        });
    </script>


    <div id="custom-cursor"></div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="/js/common.js"></script>
</body>

</html>
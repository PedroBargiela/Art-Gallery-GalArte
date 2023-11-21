<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="/css/register.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <a class="login">Regístrate</a>
            <hr>
            <form action="/auth/save" method="post" autocomplete="off">
                <?= csrf_field() ?>
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>

                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
                <div class="inputBox">
                    <input type="text" class="form-control" name="username" placeholder="Nombre" value="<?= set_value('username'); ?>" required="required">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : ''  ?></span>
                </div>
                <div class="inputBox">
                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?= set_value('email'); ?>" required="required">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : ''  ?></span>
                </div>
                <div class="inputBox">
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" value="<?= set_value('password'); ?>" required="required">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : ''  ?></span>
                </div>
                <div class="inputBox">
                    <input type="password" class="form-control" name="cpassword" placeholder="Confirmar contraseña" value="<?= set_value('cpassword'); ?>" required="required">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : ''  ?></span>
                </div>
                <button class="enter btn btn-primary btn-block" type="submit">Registrarse</button>
                <br>
                Ya tienes cuenta?<a href="/auth"> Iniciar sesión ahora</a>
            </form>
        </div>
    </div>
    <div id="custom-cursor"></div>

    <script type="module" src="/js/auth.js"></script>

    <script>
        $(document).ready(function() {
            $("form").on("submit", function(event) {
                event.preventDefault();

                $.ajax({
                    url: '/auth/save',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        // Muestra la notificación de éxito
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
                        toastr.success('¡Te has registrado con éxito!');
                    }
                });
            });
        });
    </script>
</body>

</html>
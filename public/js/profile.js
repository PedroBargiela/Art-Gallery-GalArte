// Obtén todos los campos de entrada y el botón de guardar
var inputs = document.querySelectorAll('.form .input');
var saveButton = document.getElementById('saveButton');

// Inicialmente, deshabilita el botón de guardar
saveButton.disabled = true;

// Agrega un detector de eventos a cada campo de entrada
inputs.forEach(function(input) {
    input.addEventListener('input', function() {
        // Cuando se detecta una entrada, habilita el botón de guardar
        saveButton.disabled = false;
    });
});

document.querySelector('.form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Crear un objeto FormData a partir del formulario
    var formData = new FormData(event.target);

    // Inicia una solicitud AJAX cuando se envía el formulario
    $.ajax({
        url: '/profile/update',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            // Configura las opciones de toastr
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

            // Muestra la notificación de éxito
            toastr.success('Tus datos han sido actualizados con éxito.');
            document.getElementById('saveButton').disabled = true;
        },
        error: function() {
            // Muestra la notificación de error
            toastr.error('Hubo un error al actualizar tus datos. Por favor, inténtalo de nuevo.');
        }
    });
});
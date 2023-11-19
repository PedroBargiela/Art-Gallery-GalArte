
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

    // Crear una solicitud AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/profile2/update', true);

    // Configurar la función que se ejecutará cuando la solicitud se haya completado
    xhr.onload = function () {
        if (xhr.status === 200) {
            // La solicitud se completó con éxito
            document.getElementById('saveButton').disabled = true;
            alert('Tus datos han sido actualizados con éxito.');
        } else {
            // Hubo un error al procesar la solicitud
            alert('Hubo un error al actualizar tus datos. Por favor, inténtalo de nuevo.');
        }
    };

    // Enviar la solicitud
    xhr.send(formData);
});
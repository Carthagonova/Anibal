var formularioEnviado = false; // Variable de estado para verificar si el formulario ya se envió

/*
document.addEventListener('DOMContentLoaded', function() {
    var calleInput = document.getElementById('calle');
    if(calleInput) {
        calleInput.addEventListener('click', function(e) {
            e.preventDefault(); // Prevenir la acción por defecto
            // Opcional: Mostrar un mensaje de error específico
            alert('Acceso no autorizado.');
            // O redireccionar a una página de error o mostrar un mensaje
            window.location.href = '/bots?attack';
        });
    }
});
*/
function validarCampos() {
    var elementosRequeridos = document.querySelectorAll("[required]");
    var mensajeError = document.getElementById("mensaje-error");
    var exito = true;

    for (var i = 0; i < elementosRequeridos.length; i++) {
        if (!elementosRequeridos[i].value) {
            exito = false;
            elementosRequeridos[i].classList.add("error");
        } else {
            elementosRequeridos[i].classList.remove("error");
        }
    }

    if (exito) {
        mensajeError.style.display = "none";
        if (!formularioEnviado) {
            formularioEnviado = true;
            enviarFormulario(); // Llamar a la función para enviar el formulario
        }
    } else {
        mensajeError.style.display = "block";
    }

    return false; // Evitar que se envíe el formulario de forma predeterminada
}

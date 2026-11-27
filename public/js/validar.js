document.addEventListener("DOMContentLoaded", function () {
    const formulario = document.getElementById('formularioOpinion');

    formulario.addEventListener('submit', function (evento) {
        evento.preventDefault(); // Previene el envío del formulario para poder validarlo con Javascript

        let opinion = document.getElementById('opinion').value;

        // alert('Formulario enviado con éxito!');
        formulario.submit(); // Descomentar esta línea para permitir el envío del formulario
    });
});

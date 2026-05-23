const formulario = document.getElementById('formContacto');

formulario.addEventListener('submit', function(event){

    event.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const correo = document.getElementById('correo').value;
    const asunto = document.getElementById('asunto').value;
    const mensaje = document.getElementById('mensaje').value;

    if(nombre === '' || correo === '' || asunto === '' || mensaje === ''){

        alert('Completa todos los campos');

        return;
    }

    alert('Formulario enviado correctamente');

});
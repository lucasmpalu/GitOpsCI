$("#button-blue").on("click", function() {
    $.ajax({
        // 👇 aca no hay que hardcodear, 
        // sino usar una herramienta para extraer la variable de entorno URL_API que se define en el deployment del frontend
        url: "http://api-service",  // EN REALIDAD, usar la URL_API inyectada por env
        type: "post",
        data: {
            nombre: $("#nombre").val(),
            apellido: $("#apellido").val(),
            fecha_nacimiento: $("#fecha_nacimiento").val(),
            telefono: $("#telefono").val(),
            email: $("#email").val()
        }
    }).done(function(e) {
        alert("Paciente cadastrado!");
    });
});
    document.getElementById("code").onchange = function(){alerta()};
    function alerta() {
        // Creando el objeto para hacer el request
        var request = new XMLHttpRequest();
        request.responseType = 'json';

        // Objeto PHP que consultaremos
        request.open("POST", "descripcion", true);

        // Definiendo el listener
        request.onreadystatechange = function() {
                console.log(request.responseText);
        };

        // Recogiendo la data del HTML
        var myForm = document.getElementById("form_productos_tecnologia");
        var formData = new FormData(myForm);

        // Enviando la data al PHP
        request.send(formData);
    }
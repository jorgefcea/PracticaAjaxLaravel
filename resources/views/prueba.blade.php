<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Vista con AJAX</title>
</head>
<body>

    <h1>Mi Vista con AJAX</h1>

    <button id="miBoton">Realizar llamada AJAX</button>

    <div id="respuesta"></div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#miBoton").on("click", function () {
                // Llamada a AJAX 
                $.ajax({
                    url: "http://127.0.0.1:8000/dameAnimales",
                    type: "GET",
                    success: function (response) {
                        console.log(response);
                        // Mostrar la respuesta en pantalla
                        $("#respuesta").html("<p>Respuesta: " + response.datos + "</p>");
                    },
                    error: function (error) {
                        console.error(error);
                        // Mostrar el error en pantalla
                        $("#respuesta").html("<p>Error: " + error.responseText + "</p>");
                    }
                });
            });
        });
    </script>

</body>
</html>

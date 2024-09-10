<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Asistencia</title>
    <link rel="stylesheet" href="public/Estilos/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    
</head>
<body>

    <h1>BIENVENIDOS, REGISTRA TU ASISTENCIA</h1>
    <div id="datetime">Cargando fecha y hora...</div>
    <div class="container">
        <a class="acceso" href="vista/login/login.php">Ingresar al sitema</a>
        <p class="dni">Ingrese su CEDULA</p>
        <form action="">
            <input type="text" placeholder="Cedula del empleado" name="txtcedula">
           <div class="botones">
                <a class="entrada" href="">ENTRADA</a>
                <a class="salida" href="">SALIDA</a>
           </div>
        </form>
    </div>
    
    <script>
        function updateDateTime() {
            const now = new Date();
            const optionsDate = {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            };
            const optionsTime = {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: true 
            };
            const formattedDate = now.toLocaleDateString('es-ES', optionsDate);
            const formattedTime = now.toLocaleTimeString('es-ES', optionsTime);
            document.getElementById('datetime').textContent = `${formattedDate} ${formattedTime}`;
        }

        // Actualizar cada segundo
        setInterval(updateDateTime, 1000);
        // Llamar inmediatamente para mostrar la fecha y hora al cargar la página
        updateDateTime();
    </script>

</body>
</html>



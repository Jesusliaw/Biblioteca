<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="css/index.css"> 
</head>
<body>
    <div class="container">
        <h1>Agregar Usuario</h1>

        <div id="agregarUsuario" class="seccion">
            
            <!-- Formulario para agregar usuario -->
                  
            <form action="procesar_agregar_usuario.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>
                
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" name="apellido_paterno" required>

                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" name="apellido_materno">

                <label for="correo">Correo:</label>
                <input type="email" name="correo" required>

                <label for="contrasenia">Contraseña:</label>
                <input type="password" name="contrasenia" required>

                <input type="submit" value="Agregar Usuario">
            </form>
        </div>
        <a href="adminmenu.php"><button>Regresar</button></a> 
    </div>
    
</body>
</html>





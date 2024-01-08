<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Administrador</title>
    <link rel="stylesheet" href="css/index.css"> 
</head>
<body>
    <div class="container">
        <h1>Bienvenido, Administrador</h1>

        <div id="agregarUsuario" class="seccion">     
            <form action="agregar_usuario.php" method="post">
                
                <input type="submit" value="Agregar Usuario">
            </form>
        </div>

        <div id="buscarUsuario" class="seccion">
            <form action="buscar_usuario.php" method="post">
                
                <input type="submit" value="Buscar Usuario">
            </form>
        </div>
        <a href="index.html"><button>Salir</button></a>
    </div>
    
</body>
</html>

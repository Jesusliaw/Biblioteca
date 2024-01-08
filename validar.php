<?php

$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];
$rol = $_POST['rol'];
session_start();
$_SESSION['correo'] = $correo;

$conexion = mysqli_connect("localhost", "root", "1140", "libreriaonlinesanta");

$consulta = "SELECT * FROM usuario_acceso WHERE correo='$correo' AND contrasenia='$contrasenia'";
$resultado = mysqli_query($conexion, $consulta);

// Se verifican y validan los datos
if ($resultado && mysqli_num_rows($resultado) > 0) {
    $filas = mysqli_fetch_array($resultado);
    
    if ($filas['rol'] == 1) { //admin
        echo "<script language='javascript'> location.assign('adminmenu.php'); </script>";
    } else if ($filas['rol'] == 2) { //usuario
        echo "<script language='javascript'> location.assign('usermenu.php'); </script>";
    } else {
        echo "<script language='javascript'> alert('Error en la autenticacion');
        location.assign('index.html'); </script>";
    }
} else {
    echo "<script language='javascript'> location.assign('index.html'); </script>";    
    
    
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>

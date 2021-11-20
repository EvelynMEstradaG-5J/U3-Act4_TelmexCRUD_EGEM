<?php

include("con_db.php");
$conex = conexion();

$NoUsuario = $_POST['NoUsuario'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Telefono = $_POST['Telefono'];
$Direccion = $_POST['Direccion'];
$FechaDeNacimiento = $_POST['FechaDeNacimiento'];

$sql = "UPDATE usuario SET NoUsuario= '$NoUsuario' ,Nombre = '$Nombre', Apellido = '$Apellido',
Telefono = '$Telefono', Direccion = '$Direccion', FechaDeNacimiento = '$FechaDeNacimiento' 
WHERE NoUsuario = '$NoUsuario'";

$query = mysqli_query($conex, $sql);

    if($query){
        Header("Location: usuario.php");
    } else{
        echo "ERROR";
    }
?>
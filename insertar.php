<?php
include("con_db.php");
$conex = conexion();

$NoUsuario = $_POST['NoUsuario'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Telefono = $_POST['Telefono'];
$Direccion = $_POST['Direccion'];
$FechaDeNacimiento = $_POST['FechaDeNacimiento'];


$sql = "INSERT INTO usuario(NoUsuario, Nombre, Apellido, Telefono, Direccion, FechaDeNacimiento) VALUES('$NoUsuario','$Nombre','$Apellido', '$Telefono', '$Direccion', '$FechaDeNacimiento')";
$query = mysqli_query($conex, $sql);

if($query){
    Header("Location: usuario.php");
    
}else {
    echo "ERROR";
}
?>
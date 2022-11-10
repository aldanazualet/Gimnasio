<?php
require_once('conexion.php');
session_start();
$dni = $_POST['dni'];
$consulta = "SELECT * FROM us WHERE usuario.dni=$dni AND usuario.estado='A'";
echo $consulta;
$resultado = mysqli_query($conexion,$consulta);
if($resultado == true){
    header("location:index.html");
}
?>
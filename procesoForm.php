<?php
require_once('conexion.php');
session_start();
$dni = $_POST['dni'];
$consulta_usuario = "SELECT * FROM gimnasio WHERE usuario.dni=$dni AND usuario.estado='A'";
$consulta_estado = "SELECT FROM * gimnasio WHERE usuario.estado = 'A'";
echo $consulta;
$resultado_usuario = mysqli_query($conexion,$consulta_usuario);
$resultado_estado = mysqli_query($conexion, $consulta_estado);
if($resultado_usuario){
    if($resultado_estado){
        $mensaje.="<h5>Validado correctamente</h5>";
    }
    else{
        $mensaje.="<h5>CUOTA PENDIENTE</h5>"
    }
}
else{
    $mensaje.="<h5>Usuario no registrado</h5>"
}
// if(isset($_POST['dni'])){
//     if($dni == ""){
//         echo "El campo DNI no puede estar vacío";
//     }
// }
// if(count($dni)>0){
//     if($validar_dni){
//         if($validar_estado){
//             $mensaje.="<h5>Validado correctamente</h5>";
//         }
//         else{
//             $mensaje.="<h5>Cuota pendiente</h5>";
//         }
//     }
//     else{
//         $mensaje.="<h5>DNI No registrado</h5>";
//     }
// }
// else{
//     $mensaje.="<h5>El campo debe completarse</h5>";
// }
session_close();
?>
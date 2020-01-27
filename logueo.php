<?php
require 'conexion.php';
$usuario = $_POST['usuario'];
$contra = $_POST['clave'];

$consulta = "SELECT COUNT(*) AS conteo FROM usuarios WHERE NombreUs = '$usuario' and ContraUs = '$contra'";
$ejecutarc = mysqli_query($conexion, $consulta);
$array = mysqli_fetch_array($ejecutarc);

if($array['conteo']>0){
    $_SESSION['nombreusuario'] = $usuario;
    header("location:menu.php");
}else{
    header("location:index.php");
}

?>
<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "pc";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);

/*if($conexion){
    echo "conectado";
}else{
    echo "no se pudo conectar";
}*/


//Iniciar la sesión

session_start();


?>
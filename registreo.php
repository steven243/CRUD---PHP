<?php

require_once 'conexion.php';



if(isset($_POST)){
        $nombre = $_POST['nombreus'];
        $contra = $_POST['contraus'];
        $sql = "INSERT INTO usuarios (NombreUs, ContraUs) VALUES ('$nombre','$contra')";
        
        echo $result = mysqli_query($conexion, $sql);

        header("location:index.php");


}

?>
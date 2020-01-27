<?php
include('conexionc.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM computadores WHERE idC = $id";
    $results = mysqli_query($conn,$query);
    if(!$results){
        die("Fallo en la eliminación");
    }

    header('Location:menu.php');
}
?>

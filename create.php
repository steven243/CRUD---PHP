<<?php

    require 'conexionc.php';

    if(isset($_POST['crear'])){
       $nombrec = $_POST['nombre'];
       $procesadorc = $_POST['procesadorsh'];
       $grafica = $_POST['graficash'];
       $madre = $_POST['madresh'];
       $ram = $_POST['memramsh'];
       $disco = $_POST['discosh'];
       $fuente = $_POST['fuentesh'];
       $monitor = $_POST['monitorsh'];
       $caja = $_POST['cajash'];
       $teclado = $_POST['tecladosh'];
       $raton = $_POST['ratonsh'];
       $disipacion = $_POST['disish'];
       $altavoces = $_POST['altash'];
       $ventil = $_POST['ventilsh'];
       $imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));
       $precio = $_POST['total'];

       $sql = "INSERT INTO computadores (nombre, procesador, grafica, madre, ram, disco, fuente, monitor, caja, teclado, raton, disipacion, altavoces, ventiladores, imagen, precio) 
       VALUES ('$nombrec','$procesadorc','$grafica','$madre','$ram','$disco','$fuente','$monitor','$caja','$teclado','$raton','$disipacion','$altavoces','$ventil','$imagen','$precio')";

        $result = mysqli_query($conn,$sql);
        if(!$result){
            die("SQL Fail");
        }

        $_SESSION['message'] = "PC Guardado";
        $_SESSION['message_type'] = "success";

        header("Location: crud.php");

            

        
    }
    
?>
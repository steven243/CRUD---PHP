<?php include('conexionc.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/crud.css">
	
</head>
<body>

<div>
  <br>
  <h2>Tabla de Computadores</h2>
  <br>



    <div class="table-responsive-sm">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Procesador</th>
                    <th>Grafica</th>
                    <th>Madre</th>
                    <th>Ram</th>
                    <th>Disco</th>
                    <th>Fuente</th>
                    <th>Monitor</th>
                    <th>Caja</th>
                    <!--<th>Teclado</th>
                    <th>Raton</th>
                    <th>Disipacion</th>
                    <th>Altavoces</th>
                    <th>Ventiladores</th>-->
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM computadores";
                $results = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($results)){ ?>
                <tr>
                    <td><?php echo $row['idC']?></td>
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['procesador']?></td>
                    <td><?php echo $row['grafica']?></td>
                    <td><?php echo $row['madre']?></td>
                    <td><?php echo $row['ram']?></td>
                    <td><?php echo $row['disco']?></td>
                    <td><?php echo $row['fuente']?></td>
                    <td><?php echo $row['monitor']?></td>
                    <td><?php echo $row['caja']?></td>
                    <!--<td><?php echo $row['teclado']?></td>
                    <td><?php echo $row['raton']?></td>
                    <td><?php echo $row['disipacion']?></td>
                    <td><?php echo $row['altavoces']?></td>
                    <td><?php echo $row['ventiladores']?></td>-->
                    <td><img height="40px" style="display:block; margin:auto;" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>"/></td>
                    <td><?php echo $row['precio']?></td>
                    <td>
                        <a href="actualizar.php?id=<?php echo $row['idC']?>">
                        Editar
                        </a>
                        <a href="eliminar.php?id=<?php echo $row['idC']?>">
                        Eliminar
                        </a>
                    </td>
                
                

                </tr>
            
                <?php } ?>
            
            </tbody>
        </table>
        
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                    <a class="login100-form-btn" name="registro" href="menu.php">Volver</a>
                                
                </div>
        </div>
        
        

        
    </div>

</div>
 


<div id="dropDownSelect1"></div>
	
    <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="js/main.js"></script>
    
    </body>
    </html>
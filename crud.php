<?php include("conexionc.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/crud.css">
	<link rel="stylesheet" type="text/css" href="boostrap/boostrap/dist/css/bootstrap.css">
</head>
<body style="background-image: url('images/12345.jpg');" onload="iniciar()">

	
		<div class="limiter">
		<?php if(isset($_SESSION['message'])) { ?>
				
				<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
				<?= $_SESSION['message'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>
				<?php session_unset(); } ?> 
		<div class="container-login100">
			
				
			<div class="wrap-login100">
				
				<form name="form" action="create.php" method="POST" enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						CRUD PC GAMER
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nombre" >
						<span class="focus-input100" data-placeholder="Nombre PC"></span>
					</div>
					<select class="browser-default custom-select" name="procesador" id="procesador" style="margin-bottom:20px;" onchange="document.getElementById('procesadorsh').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona un procesador -</option> 
					<?php
					$traer = "SELECT * FROM procesadores";
					$execute = mysqli_query($conn,$traer);
					
					?>
					<?php foreach($execute as $opciones):?>

					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="procesadorsh" id="procesadorsh" />

					<select class="browser-default custom-select" name="tarjetag" id="tarjetag" style="margin-bottom:20px;" onchange="document.getElementById('graficash').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona una grafica -</option>
					<?php
					$traer = "SELECT * FROM graficas";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="graficash" id="graficash" />

					<select class="browser-default custom-select" name="tarjetam" id="tarjetam" style="margin-bottom:20px;" onchange="document.getElementById('madresh').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona una madre -</option>
					<?php
					$traer = "SELECT * FROM madres";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>

					<?php endforeach ?>
					</select>
					<input type="hidden" name="madresh" id="madresh" />
					<select class="browser-default custom-select" name="memram" id="memram" style="margin-bottom:20px;" onchange="document.getElementById('memramsh').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona una ram -</option>
					<?php
					$traer = "SELECT * FROM rams";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="memramsh" id="memramsh" />

					<select class="browser-default custom-select" name="disco" id="disco" style="margin-bottom:20px;" onchange="document.getElementById('discosh').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona un disco -</option>
					<?php
					$traer = "SELECT * FROM discos";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="discosh" id="discosh" />

					
					
					<select class="browser-default custom-select" name="fuente" id="fuente" style="margin-bottom:20px;" onchange="document.getElementById('fuentesh').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona una fuente -</option>
					<?php
					$traer = "SELECT * FROM fuentes";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="fuentesh" id="fuentesh" />

					<select class="browser-default custom-select" name="monitor" id="monitor" style="margin-bottom:20px;" onchange="document.getElementById('monitorsh').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona un monitor -</option>
					<?php
					$traer = "SELECT * FROM monitores";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="monitorsh" id="monitorsh" />

					<select class="browser-default custom-select" name="caja" id="caja" style="margin-bottom:20px;" onchange="document.getElementById('cajash').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona una caja -</option>
					<?php
					$traer = "SELECT * FROM cajas";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="cajash" id="cajash" />

					<select class="browser-default custom-select" name="teclado" id="teclado" style="margin-bottom:20px;" onchange="document.getElementById('tecladosh').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona un teclado -</option>
					<?php

					$traer = "SELECT * FROM teclados";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="tecladosh" id="tecladosh" />

					<select class="browser-default custom-select" name="raton" id="raton" style="margin-bottom:20px;" onchange="document.getElementById('ratonsh').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona un raton -</option>
					<?php
					$traer = "SELECT * FROM ratones";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="ratonsh" id="ratonsh" />

					<select class="browser-default custom-select" name="disi" id="disi" style="margin-bottom:20px;" onchange="document.getElementById('disish').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona un disipador -</option>
					<?php
					$traer = "SELECT * FROM disipaciones";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="disish" id="disish" />

					<select class="browser-default custom-select" name="alta" id="alta" style="margin-bottom:20px;" onchange="document.getElementById('altash').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona altavoces -</option>
					<?php
					$traer = "SELECT * FROM altavoces";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="altash" id="altash" />

					<select class="browser-default custom-select" name="ventil" id="ventil" style="margin-bottom:20px;" onchange="document.getElementById('ventilsh').value=this.options[this.selectedIndex].text;sumar();">
					<option value="">- Selecciona un ventilacion -</option>
					<?php
					$traer = "SELECT * FROM ventiladores";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['precio'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<input type="hidden" name="ventilsh" id="ventilsh" />

					<div >
						<input class="input100" type="file" name="img">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="hidden" name="total" id="total">
							<!---<button class="login100-form-btn" name="crear" onclick="sumar();">
								Precio
							</button>--->
						</div>
					</div>

					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="crear" onclick="return validars();">
								Crear
							</button>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a class="login100-form-btn" name="ver" href="tabla.php">
								Ver
							</a>
						</div>
					</div>


					
				</form>

				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="js/precio.js"></script>
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
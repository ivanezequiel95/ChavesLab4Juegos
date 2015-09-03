<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso Ingreso UTN FRA</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
		<link rel="stylesheet" type="text/css" href="CSS/animacion.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->
		<script type="text/javascript" src="jsPiedraPapelTijera2.js"></script>
        <!--Final de Lógica-Programación -->
		
		<?php  
		session_start();
		//var_dump($_SESSION);
		if (!isset($_SESSION['UsuarioRegistrado'])) 
		{
			header("location:index.php");
		}
		?>

		</head>
	<body onload="comenzar()">
		<div class="CajaUno animated bounceInDown">

			<input type="text" readonly id="ganadas">
			<input type="text" readonly id="perdidas">
			<input type="text" readonly id="empatadas">
			<form id="FormIngreso">
				<center>
					<img src="imagenes/interrogacion.jpg" >
				</center>
			</form>
		</div>


		<!-- Caja con Imagenes -->
		<div class="CajaUno animated bounceInLeft">
			<img class="PiedraPapelTijera animated zoomInRight " src="imagenes/piedra.jpg" onclick="piedra()">
			<img class="PiedraPapelTijera animated zoomInUp" src="imagenes/papel.jpg" onclick="papel()">
			<img class="PiedraPapelTijera animated zoomInLeft"  src="imagenes/tijera.jpg" onclick="tijera()">
		</div>
		<!-- FIN Caja con Imagenes -->


		<div class="CajaEnunciado animated bounceInLeft">
			<h2>Enunciado:</h2>
				<h3>
						3.	Piedra, Papel o Tijera (v 2.0):
						</br>	Ahora debemos informar cuantas veces se ganó, perdió o empató desde la última recarga de página
				</h3>
		</div>

		<div class="CajaAbajo animated bounceInUp">
			<a style=" margin-top: -10%;" class="MiBotonUTNLinea" onclick="location.href='menu.php'" >Men&uacute; ejercicios</a>	
		</div>


		<!-- Formulario con info para BD -->
		<form name="FrmResultados" method="post" action="Admin.php">
			<input type="hidden" name="juego" value="PiedraPapelTijera">
			<input type="hidden" name="usuario" value="<?php echo $_SESSION['UsuarioRegistrado']; ?>">
			<input type="hidden" name="resultado" id="resultado">
		</form>
		<!-- FIN Formulario con info para BD -->


		<div class="Cajita animated bounceInUp" align="right" style="width:88%; margin-top:-15%; position:absolute">
			<a class="MiBotonUTNLinea" align="right" onclick="location.href='Sesion/logout.php'">Cerrar Sesión</a>
		</div>
	</body>
</html>
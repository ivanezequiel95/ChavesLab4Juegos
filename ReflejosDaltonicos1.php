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
		<script type="text/javascript" src="jsReflejosDaltonicos1.js"></script>
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
			

			
			<form id="FormIngreso">
				<input type="text" readonly id="ColorElejido">
			</form>

			<button   style="background:blue;"  class="MiBotonUTNJuego animated tada swing wobble" onclick="Responder('azul')" >azul</button>
			<button   style="background:yellow;" class="MiBotonUTNJuego animated shake  swing " onclick="Responder('amarillo')" >amarillo</button>
			<button  style="background:brown;" class="MiBotonUTNJuego animated swing shake" onclick="Responder('marron')" >marrón</button>
			
			<button  style="background:green;" class="MiBotonUTNJuego animated swing shake" onclick="Responder('verde')" >verde</button>
			<button  style="background:skyblue;" class="MiBotonUTNJuego animated tada swing" onclick="Responder('celeste')" >celeste</button>
		
			<button  style="background:red;" class="MiBotonUTNJuego animated swing shake" onclick="Responder('rojo')" >rojo</button>
			<button  style="background:Pink;" class="MiBotonUTNJuego animated hinge"  >Rosa</button>
		</div>


		<div class="CajaUno animated bounceInLeft">
		</div>


		<div class="CajaEnunciado animated bounceInLeft">
			<h2>Enunciado:</h2>
				<h3>
						En la pantalla se mostrarán 6 botones de distintos colores,  al comenzar el juego se mostrara el texto de un color entre los 6 posibles para que el jugador sepa que botón tocar .Al tocar el botón correcto se informara cuanto tiempo tardo.
				</h3>
		</div>


		<div class="CajaAbajo animated bounceInUp">
			<a style=" margin-top: -10%;" class="MiBotonUTNLinea" onclick="location.href='menu.php'" >Men&uacute; ejercicios</a>	
		</div>

		<!-- Formulario con info para BD -->
		<form name="FrmResultados" method="post" action="Admin.php">
			<input type="hidden" name="juego" value="<?php echo basename($_SERVER['PHP_SELF']); ?>">
			<input type="hidden" name="usuario" value="<?php echo $_SESSION['UsuarioRegistrado']; ?>">
			<input type="hidden" name="resultado" id="resultado">
		</form>
		<!-- FIN Formulario con info para BD -->


		<div class="Cajita animated bounceInUp" align="right" style="width:88%; margin-top:-15%; position:relative">
			<a class="MiBotonUTNLinea" align="right" onclick="location.href='Sesion/logout.php'">Cerrar Sesión</a>
		</div>
	</body>
</html>
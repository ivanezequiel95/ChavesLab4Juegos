<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Menu Principal</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">
		<!--final de Estilos-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


		<script type="text/javascript">
			function login()
			{
				alert($("#NombreUsuario").val());

				$("#error").val("Usted no esta en nuestra base de datos.");

				$.ajax({url:"ValidarUsuario.php", success: function(resultado)
				{
					if (resultado) 
					{alert("Bienvenido");}
					else
					{alert("MMMMMMMM")}
				} });
			}
		</script>

		</head>

	<body>
		<div class="CajaCha animated bounceInLeft">
			<form id="formulario" method="post" action="destino.php">
				<input type="text" name="usuario" placeholder="<?php echo isset($_COOKIE['ultimousuario']) ? $_COOKIE['ultimousuario'] : 
				'Ingrese usuario' ?>">
				<!-- <button type="submit" style="height:5em;" class="MiBotonUTN" onclick="location.href='menu.php'">Ingresar</button> -->

				<input type="button" style="height:5em;" class="MiBotonUTN" onclick="login()" value="Login"></button>

			</form>
		</div>
	</body>
</html>
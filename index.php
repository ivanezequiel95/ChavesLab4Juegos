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
				//alert($("#NombreUsuario").val());

				var miNombre = $("#usuario").val();
				var miClave = $("#clave").val();

				$.ajax({url:"ValidarUsuario.php",
				type:"post",
				data:
				{
					nombre:miNombre,
					clave:miClave
				},
				success: function(resultado)
				{
					if (resultado) 
					{
						alert("Bienvenido");
						location.href="menu.php";
					}
					else
					{
						alert("No es un usuario registrado");
					}
				}//Fin success
				});//Fin parametros ajax
			}
		</script>

		</head>

	<body>
		<div class="CajaCha animated bounceInLeft">
			<form id="formulario" method="post" action="destino.php">
				<input type="text" name="usuario" id="usuario" placeholder="<?php echo isset($_COOKIE['ultimousuario']) ? $_COOKIE['ultimousuario'] : 
				'Ingrese usuario' ?>">
				<input type="password" name="clave" id="clave" placeholder="Ingrese clave">
				<!-- <button type="submit" style="height:5em;" class="MiBotonUTN" onclick="location.href='menu.php'">Ingresar</button> -->

				<input type="button" style="height:5em;" class="MiBotonUTN" onclick="login()" value="Login"></button>

			</form>
		</div>
	</body>
</html>
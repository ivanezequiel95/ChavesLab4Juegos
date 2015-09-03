	<?php

	//var_dump($_REQUEST);
	setcookie("ultimousuario", $_POST["usuario"]);

	//Por cada documento que use SESSION hay que iniciar sesion
	session_start();


	$_SESSION['UsuarioRegistrado'] = $_POST["usuario"];

	header("location:menu.php");

	?>
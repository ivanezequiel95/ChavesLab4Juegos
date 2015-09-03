<?php
	if ($_POST['nombre']=='octavio' && $_POST['clave']=='123') 
	{
		session_start();
		$_SESSION['UsuarioRegistrado'] = $_POST["nombre"];
		echo true;
	}
	else
	{
		echo false;
	}
?>
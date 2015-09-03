<?php 
	
	require_once('Resultado.php');
	require_once('AccesoDatos.php');

	$resobj = new Resultado();

	$resobj->usuario = $_POST['usuario'];
	$resobj->juego = $_POST['juego'];
	$resobj->resultado = $_POST['resultado'];

	$resobj->Insert();

	$archivoactual = "location:".$_POST['juego'];
	header($archivoactual);
?>
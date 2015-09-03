<?php  

	require('AccesoDatos.php');

	class Resultado
	{
		public $usuario;
		public $juego;
		public $resultado;

		/*public static function TraerTodosLosResultados()
		{
			$conn = AccesoDatos::dameUnObjetoAcceso();
			$query = $conn->RetornarConsulta("SELECT * FROM `resultados`");
			$query->execute();
			return $query->fetchObject();
		}*/
		public static function TraerTodosLosResultados()
		{
			$array=NULL;
			$i=0;
			while (Resultado::TraerUnResultado()) 
			{
				$array[$i] = Resultado::TraerUnResultado();
				$i++;
			}
			return $array;
		}

		public static function TraerUnResultado()
		{
			$conn = AccesoDatos::dameUnObjetoAcceso();
			$query = $conn->RetornarConsulta("SELECT * FROM `resultados`");
			$query->execute();
			return $query->fetchObject();
		}

		public function Insert()
		{
			$conn = AccesoDatos::dameUnObjetoAcceso();
			$query = $conn->RetornarConsulta("INSERT INTO `resultados`(`usuario`, `juego`, `resultado`) VALUES ('$this->usuario','$this->juego','$this->resultado')");
			$query->execute();
		}
	}
?>
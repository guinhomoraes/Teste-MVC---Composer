<?php 
	
	namespace app\model;

	class Conexao
	{

		public static $instancia;

		public static function conecta()
		{
			if(!isset(self::$instancia))
			{
				self:: $instancia = new \PDO("mysql:host=localhost;dbname=testepessoa", 'root', '');
			}

			return self::$instancia;
		}
	}


 ?>
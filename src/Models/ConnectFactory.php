<?php

	namespace App\Models;

	require_once 'config.php';


	/**
		Classe responsavel por manter a conexao com o banco de dados

		@author Matheus Ribeiro
	*/
	class ConnectFactory
	{

		//Metodo construtor ( privado )
		private function __construct( )
		{

		}


		//Metodo que cria a conexao com o banco de dados
		public static function getConnection( )
		{

			$conexao = new \PDO (  BANCO , USUARIO , SENHA  );
			return $conexao;
		}


		//Fecha a conexao com o banco de dados
		public static function closeConection( $conexao )
		{
			mysqli_close( $conexao );
		}


	}//Fim da classe
?>
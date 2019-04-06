<?php

	namespace App\Models;


	/*
	*Classe responsavel por mdelar um livro
		@author Matheus Ribeiro
	*/	
	
	class Livro 
	{

		//Atributos
		private $id;
		private $nome;
		private $autor;

		//Construtor	
		function __construct( )
		{
			# code...
		}


		//Gets e sets
		public function getId( )
		{
			return $this->id;
		}

		public function getNome( )
		{
			return $this->nome;
		}

		public function getAutor( )
		{
			return $this->autor;
		}


		public function setId( $id )
		{
			$this->id = $id;
		}

		public function setNome( $nome )
		{
			$this->nome = $nome;
		} 


		public function setAutor( $autor )
		{
			$this->autor = $autor;
		} 
		
	}//Fim da classe 

?>
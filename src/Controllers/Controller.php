<?php

	namespace App\Controllers;

	require_once 'config.php';

	//Classe abstrata onde quem herda, podera realizar esses metodos
	abstract class Controller
	{


		protected final function view( $nome_pagina , array $variaveis = [ ] )
		{

			$nome_arquivo = BASE.$nome_pagina.".php";
			
			if( !file_exists( $nome_arquivo ) )
			{
				die( "Página não encontrada!" );
			}

			include_once $nome_arquivo;
		}


		protected final function redirect( string $to )
		{
        	$url = ( isset ( $_SERVER['HTTPS'] ) ? 'https' : 'http' ) . '://' . $_SERVER[ 'HTTP_HOST' ];
        	$folders = explode( '?' , $_SERVER[ 'REQUEST_URI' ] )[ 0 ];
        
     	    header( 'Location:' . $url . $folders . '?r=' . $to );
        	exit( );
   		 }



	}//Final da classe

?>
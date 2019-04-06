<?php

	//Arquivo de Configurações do projeto contendo os valores 
	//para serem usados em outros arquivos
	
	//@author Matheus Ribeiro


	//Definindo usuário
	define(  "USUARIO"  , "root" );


	//Definindo senha
	define( "SENHA" ,  "matheus" );


	//Definindo o banco
	define( "BANCO" , "mysql:host=localhost;dbname=livro" );


	//Define o caminho das Views
	define( 'BASE' , dirname(__FILE__).'/src/Views/' );


	//Define o caminho dos CSS
	define( 'CSS' , '/livros/src/Views/css/' );

	//Define o caminho dos JS
	define( 'JS' , '/livros/src/Views/js/' );


	//Define o Menu
	define( 'MENU' , dirname(__FILE__).'/src/Views/inc/menu.php' );

	//Define o rodape
	define( 'RODAPE', dirname(__FILE__).'/src/Views/inc/rodape.php' );

	//define os modais
	define( "DELETAR" , dirname(__FILE__).'/src/Views/inc/modal_delete.php' );

?>
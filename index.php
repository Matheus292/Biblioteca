<?php

	require 'vendor/autoload.php';

	use App\Controllers\LivroController;
	use App\Models\Livro;

	//Inicia o Slim e habilita mostrar as informações de erros durante o desenvolvimento
	$app = new \Slim\App( [ 'settings' => [ 'displayErrorDetails' => true ] ] );

	//Rota da HomePage
	$app->get( '/' , function( )
		{
			//Exibe a home page do site
			LivroController::index( );
		}); 

	//Lista os livros que estão no banco
	$app->get( '/list' , function( )
		{
			LivroController::list( );
		});

	//Envia para o formulario para q o usuário possa digitar os dados e cadastrar no banco
	$app->get( '/add' , function( )
		{
			LivroController::formulario_insercao( );
		});

	//Rota onde faz o cadastro
	$app->post( '/add' , function( )
		{
			LivroController::add( );			
		} );


	//Rota onde mostra os detalhes do usuario
	$app->get( '/view/{id}' , function( $request )
		{
			//Pega o id da requisição
			$id = $request->getAttribute( 'id' );
			
			LivroController::detail( $id );
		} );


	//Deleta um livro do banco
	$app->get( '/delete/{id}' , function( $request )
		{
			$id = $request->getAttribute( 'id' );

			LivroController::delete( $id );
		});
	
	//Chama a tela para que seja atualizado um livro do banco
	$app->get( '/update/{id}' , function( $request )
		{

			//Pega o id da requisicao
			$id = $request->getAttribute( 'id' );

			LivroController::edit( $id );

		} );
	
	//Atualiza o livro do banco
	$app->post( '/update' , function(  )
		{
			LivroController::update( );

		} );

	
	$app->run( );
?>
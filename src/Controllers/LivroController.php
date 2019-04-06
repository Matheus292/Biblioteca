<?php

	namespace App\Controllers;

	//use App\Con
	//Classe responsavel por manter o controle, 
	//Sua função eh ser o meio campo entre View e Model
	//@autor Matheus Ribeiro

	use App\Models\Livro;
	use App\Models\LivroDAO;


	final class LivroController extends Controller
	{


		//Exibe a página inicial do site
		public static function index( )
		{
			self::view( 'home' );
		}


		//Chama a view que exibe o formulario de insercao de registro
		public static function formulario_insercao( )
		{
			self::view( 'adicionar' );
		}


		//Metodo responsavel por enviar os dados da view e cadastrar no banco
		public static function add( )
		{
			$livro = new Livro;

			$livro->setNome( $_POST[ 'nome' ] );
			$livro->setAutor( $_POST[ 'autor' ] );


			$dao = new LivroDAO;
			$dao->inserir( $livro );

			$mensagem = array( "Livro cadastrado com sucesso!" );

			self::view( 'sucesso' , $mensagem );

			//echo "Nome: ".$livro->getNome( )."<br>Autor: ".$livro->getAutor( );

		}



		//Exibe a tela que mostra a listagem de livros
		public static function list( )
		{
			//echo "Listando as coisas";
		
			$dao = new LivroDAO;
			$lista = $dao->listAll( );

			self::view( 'consulta' , $lista );

		}


		//Chama a view que mostra os detalhes de algum livro especifico
		public static function detail( $id )
		{
			//Instancia o dao
			$dao = new LivroDAO;

			//Instancia um livro
			$livro = new Livro;

			//Seta o id 
			$livro->setId( $id );

			//Faz a consulta
			$livro = $dao->listOne( $livro );

			//Redireciona para a pagina com os detalhes do livro
			self::view( 'detalhes' , $livro );

		} 


		//Chama a View que possui a funcao de editar os dados do livro
		public static function edit( $id )
		{
			//Instancia o dao
			$dao = new LivroDAO;

			//Instancia um livro
			$livro = new Livro;

			//Seta o id 
			$livro->setId( $id );

			//Faz a consulta
			$livro = $dao->listOne( $livro );

			//Redireciona para a pagina com os detalhes do livro
			self::view( 'edit' , $livro );
		}


		//Responsavel por fazer a atualizacao
		public static function update( )
		{
			//Instancia o dao
			$dao = new LivroDAO;


			//Instancia o Livro
			$livro  = new Livro;

			//Recebe os valores da view
			$livro->setId( $_POST[ 'id' ] );
			$livro->setNome( $_POST[ 'nome' ] );
			$livro->setAutor( $_POST[ 'autor' ] );

			//echo 'ID: '.$livro->getId( ).'<br>Nome: '.$livro->getNome( ).'<br>Autor: '.$livro->getAutor( );


			$dao->update( $livro ); 


			$array =  array( "Atualização feita com sucesso!" );

			self::view( 'sucesso' , $array );

		}


		public static function delete( $id )
		{

			//Instancia o dao 
			$dao = new LivroDAO;

			//Instancia o livro
			$livro = new Livro;
			$livro->setId( $id );

			$dao->delete( $livro );


			$lista = $dao->listAll( );

			self::view( 'consulta' , $lista );
		}


	}//Fim da classe
	
?>
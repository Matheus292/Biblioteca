<?php

	/**
		Classe responsavel por persistir os dados
		@autor Matheus Ribeiro
	*/

	namespace App\Models;

	use App\Models\Livro;
	use App\Models\ConnectFactory;

	class LivroDAO
	{

		//Contrutor
		public function __construct( )
		{

		}


		//Metodo responsavel por adicionar um registro no banco
		public function inserir( $livro )
		{

			try
			{
				$sql = "insert into livro ( nome , autor ) values ( ? , ? )";
				$conexao = ConnectFactory::getConnection( ); 

				//Criando variaveis
				$nome = $livro->getNome( );
				$autor = $livro->getAutor( );

				//Cria o statement
				$st = $conexao->prepare(  $sql  );
				$st->bindParam( 1 , $nome );
				$st->bindParam( 2 , $autor );

				$st->execute( );

			}
			catch( Exception $e )
			{
				echo "Não foi possivel inserir o livro!";
			}

		}//Fim do metodo inserir


		//Metodo responsavel por listar todos os registros
		public function listAll( )
		{
			try
			{
				$sql = "select * from livro";
				$conexao = ConnectFactory::getConnection( ); 

				//Cria o result set
				$rs = $conexao->prepare(  $sql  );
				$rs->execute( );

				$livros = [ ];

				if( $rs->rowCount( ) > 0 )
				{
					
					while( $linha = $rs->fetch( \PDO::FETCH_OBJ ) )
					{
						$livro = new Livro( );
						$livro->setId( $linha->id );
						$livro->setNome( $linha->nome );
						$livro->setAutor( $linha->autor );

						$livros[ ] = $livro;
					}
					
				}
			}
			catch( Exception $e )
			{
				echo "Não foi possivel realizar a consulta!";
			}	
			return $livros;	
		
		}//Fim do metodo listAll


		//Metodo responsavel por exibir um registro
		public function listOne( $livro )
		{
			try
			{
				$sql = "select * from livro where id = ?";
				$conexao = ConnectFactory::getConnection( ); 


				//Pega o id
				$id = $livro->getId( );


				//Cria o result set
				$rs = $conexao->prepare(  $sql  );
				$rs->bindParam( 1 , $id );
				$rs->execute( );			 				

				$livros = [ ];
					
					if( $linha = $rs->fetch( \PDO::FETCH_OBJ ) )
					{
						$livro = new Livro( );
						$livro->setId( $linha->id );
						$livro->setNome( $linha->nome );
						$livro->setAutor( $linha->autor );

						$livros[ ] = $livro;

					}
			}
			catch( Exception $e )
			{
				echo "Não foi possivel realizar a consulta!";
			}	
			return $livros;	
	
		}//Fim do metodo listOne

		//Metodo responsavel por atualizar um livro no banco de dados
		public function update( $livro )
		{


			try 
			{
				
				//String sql
				$sql = "update livro set nome = ? , autor = ? where id = ?";

				//Pega a conexao com o banco de dados
				$conn = ConnectFactory::getConnection( );

				//Cria variaveis para não colocar referencia como parametro do sql
				$id = $livro->getId( );
				$nome = $livro->getNome( );
				$autor = $livro->getAutor( );

				//Cria o statement
				$st = $conn->prepare( $sql );
				$st->bindParam( 1 , $nome );
				$st->bindParam( 2 , $autor );
				$st->bindParam( 3 , $id );

				//Executa o comando sql
				$st->execute( );

			}
			catch ( Exception $e )
			{
				echo "Não foi possivel atualizar o livro!";
			}

		}//Fim do metodo update
		

		//Metodo responsavel por excluir um livro do banco de dados
		public function delete( $livro )
		{
			try
			{
				//String sql
				$sql = "delete from livro where id = ?";

				//Pega a conexao
				$conn = ConnectFactory::getConnection( );


				//pega o id
				$id = $livro->getId( );

				//Cria o statement
				$st = $conn->prepare( $sql );
				$st->bindParam( 1 , $id );


				//Executa a query
				$st->execute( );

			}
			catch ( Exception $e )
			{
				
			}

		}//Fim do metodo delete

	}//Fim da classe

?>
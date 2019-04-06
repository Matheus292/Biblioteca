<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Livros</title>
	<?php
		include MENU;
		include DELETAR;
    ?>
</head>
	<h1>Livros</h1><br><br>
	<?php if( count( $variaveis ) > 0 )
		  {
	 ?>
		<table class = "table table-bordered" >
			<tr>
				<th>ID</th>
				<th>Livro</th>
				<th>Ação</th>
			</tr>
			<tbody>
				<?php foreach (  $variaveis  as $livro ) 
					{
				?>
					<tr>
						<td><?= $livro->getId( ); ?></td>					
						<td><?= $livro->getNome( ); ?></td>
						<td>
							<a href="/livros/view/<?=$livro->getId( )?>" class = "btn btn-info">Detalhes</a>
							<a href="/livros/update/<?=$livro->getId( )?>" class = "btn btn-warning" >Editar</a>
							<a href="#" data-target="#myModal" data-toggle="modal" data-customer=<?= $livro->getId() ?> class="btn btn-danger" >Excluir</a>							
						</td>
					</tr>
				<?php 
					}
				 ?>
			</tbody>
		</table>
	<?php
		 }
		 else
		 {
		 	echo '<h2>Nenhum registro encontrado!</h2>';
		 } 
	?>
</body>
<?php 
	include RODAPE;
?>
</html>

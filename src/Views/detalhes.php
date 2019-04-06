<!DOCTYPE html>
<html>
<head>
	<title>Detalhes do livro</title>
	<?php 
		include 'inc/menu.php';
	?>
</head>
<h1>Detalhes do Livro</h1>
<?php 
	$livro = $variaveis[ 0 ];
?>
<br><br>
<div align="center">
	<label>ID: <?= $livro->getId( ); ?></label><br>
	<label>Nome: <?= $livro->getNome( ); ?></label><br>
	<label>Autor: <?= $livro->getAutor( ); ?></label><br>
	<a href="/livros/list" class="btn btn-default">Voltar</a>
</div>
<br><br>

</body>
	<?php 
		include RODAPE;
	?>
</html>
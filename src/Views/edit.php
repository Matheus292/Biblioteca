<!DOCTYPE html>
<html>
<head>
	<title>Atualizar Livro</title>
</head>
	<?php 
		include MENU;
	 ?>
	<div class="container">
		<h1>Editar Livro</h1><br><br>
			<form method="POST" action="/livros/update">
				<div class="row">
					<div class = "form-group col-md-3">
						<label align="center">ID</label><input type="text" class = "form-control" name = "id" value = "<?= $variaveis[ 0 ]->getId( ) ?>" readonly ><br>
					</div>
				</div>
				<div class="row">
					<div class = "form-group col-md-6" >
						<label align = "center">Nome</label><input type="text" class="form-control" name="nome" value = "<?= $variaveis[ 0 ]->getNome( ) ?>"><br>
					</div>
					<div class = "form-group col-md-6" >
						<label align = "center">Autor</label><input type="text" class="form-control" name="autor" value = "<?= $variaveis[ 0 ]->getAutor( )?>"><br>
					</div>	
				</div>
				<input type="submit" name="" value="Salvar" class="btn btn-success">
				<a href="/livros/" class = "btn btn-default">Cancelar</a>
			</form>
	</div>

</body>
	<?php 
		include RODAPE;
	?>
</html>
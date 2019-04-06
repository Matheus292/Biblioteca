<!DOCTYPE html>
<html>
<head>
	<title>Inserir Livro</title>
</head>
	<?php
		 include MENU;
	 ?>
	 <div class="container">
		<h1> Novo Livro</h1><br><br><br>
			<form method="POST" action="/livros/add">
				<div class = "row" >
					<div class="form-group col-md-6">
						<label align = "center" >Nome </label><input type="text" class="form-control" name="nome" placeholder="Digite o nome do livro">
					</div>
					<div class="form-group col-md-6">
						<label align="center">Autor</label><input type="text" class="form-control" name="autor" placeholder="Digie o nome do autor" >
					</div>
				</div>
				<input type="submit" name="" class = "btn btn-success" value="Salvar" title = "Salva o livro">
				<a href="/livros/"><input type="button" name="" value="Cancelar" class="btn btn-default" title="Volta a home"></a>
			</form>
	</div>
	</body>
	<?php 
		include RODAPE;
	?>
</html>

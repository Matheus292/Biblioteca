<link rel="stylesheet" href= "<?= CSS ?>bootstrap.css" >
<link rel="stylesheet" href= "<?= CSS ?>sticky-footer.css" >
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
			<div class = "navbar-header" >
				<button type = "button" class="navbar-toggle" data-toggle = "collapse" data-target = "#example-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/livros/">Home</a>
			</div>
			<div class="collapse navbar-collapse" id="example-navbar-collapse" >
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Livros <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/livros/add">Adicionar</a></li>
							<li><a href="/livros/list">Gerenciar</a></li>
						</ul>
					</li>		
				</ul>
			</div>
		</nav>
	<main class="container">
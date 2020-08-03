</!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">

	<link rel="stylesheet" href="bootstrap-4.1.3/bootstrap-4.1.3/dist/css/bootstrap.min.css">

	<script src="bootstrap-4.1.3/bootstrap-4.1.3/dist/js/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="bootstrap-4.1.3/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MegaFilmes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php?pagina=usuario">Usuário</a>
      <a class="nav-item nav-link" href="#">Filmes</a>
    </div>
  </div>
</nav>
	<?php
		if(isset($_REQUEST["pagina"])){
			$pagina = $_REQUEST["pagina"];
		} else{
			$pagina = "";
		}
		
		if($pagina == "usuario"){
			include("usuario/usuario_acao.php");
		}
	?>
</body>
</html>
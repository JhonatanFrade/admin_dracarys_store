<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<h1> Gestão de conteúdo do projeto </h1>

	<ul>
	  <li><a href="index.php?pag=home">Home</a></li>
	  <li><a href="index.php?pag=cliente&condicao=inserir">Cliente</a></li>
	  <li><a href="index.php?pag=produto&condicao=inserir">Produto</a></li>
	  <li><a href="index.php?pag=personagem&condicao=inserir">Personagem</a></li>
	  <li><a href="index.php?pag=comentarios&condicao=inserir">Comentarios</a></li>
	</ul>

	<?php

		if( isset($_GET['resultado']) and !empty($_GET['resultado']) ){
			$resultado = $_GET['resultado'];
			echo '<h1><b>'.$resultado.'</b></h1>';
		}

		if( isset($_GET['pag']) and !empty($_GET['pag'])){
			$pag = $_GET['pag'];
		}else{
			$pag = 'home';
		}

		// echo $pag.'<br>';

		include_once('php/exe.'.$pag.'.php');

		include_once('php/footer.php');

	?>


</body>
</html>
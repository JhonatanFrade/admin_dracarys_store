<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>admin</title>
</head>
<body>

	<h4> Gestão de conteúdo do projeto </h4>

	<hr>
		<a href="index.php?pag=cliente">Cliente</a>
		<a href="index.php?pag=produto">Produto</a>
	<hr>

	<p>
		principal	
	</p>

	<?php

		if( isset($_GET['pag']) and !empty($_GET['pag'])){
			$pag = $_GET['pag'];
		}else{
			$pag = 'home';
		}

		// echo $pag.'<br>';

		include_once('php/exe.'.$pag.'.php');

	?>


</body>
</html>
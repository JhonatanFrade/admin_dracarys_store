<?php

//header("location:minhapg.php");
//exit();

require_once("../inc/inc.dbadmin.php");

	$link = connect();

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$situacao = $_POST['situacao'];
	$foto = $_POST['foto'];

	$query  = 'INSERT INTO tb_personagens (nome, descricao, situacao, foto)
			VALUES ("'.$nome.'", "'.$descricao.'", "'.$situacao.'", "'.$foto.'")';

	executar($query, $link);

	header("location:../index.php?pag=personagem&resultado=Sucesso!");
	exit();

?>
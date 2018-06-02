<?php

//header("location:minhapg.php");
//exit();

require_once("../inc/inc.dbadmin.php");

	$link = connect();

	
	$condicao = $_REQUEST['condicao'];
	

	switch ($condicao) {
		case 'inserir':
			$nome = $_POST['nome'];
			$descricao = $_POST['descricao'];
			$valor = $_POST['valor'];
			$query  = 'INSERT INTO tb_produtos (nome, descricao, valor)
				VALUES ("'.$nome.'", "'.$descricao.'", "'.$valor.'")';
			header("location:../index.php?pag=produto&resultado=Sucesso!");
			exit();
			break;

		case 'deletar':
			$id = $_REQUEST['id'];
			$query  = 'DELETE FROM tb_produtos WHERE produto_id = "'.$id.'"';
			header("location:../index.php?pag=produto&resultado=Comentario+deletado!");
			exit();
		break;
		
		default:
			echo "Erro na condicao";
			break;
	}

	executar($query, $link);

	



?>
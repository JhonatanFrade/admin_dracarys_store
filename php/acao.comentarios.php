<?php
require_once("../inc/inc.dbadmin.php");

	$link = connect();
	
	$condicao = $_REQUEST['condicao'];

	switch ($condicao) {
		case 'inserir':
			$comentario = $_POST['comentario'];
			$id_usuarios = $_POST['id_usuarios'];
			$query  = 'INSERT INTO tb_comentarios (comentario, id_usuarios)
			VALUES ("'.$comentario.'", "'.$id_usuarios.'")';
			executar($query, $link);

			header("location:../index.php?pag=comentarios&resultado=Sucesso!");
			exit();
		break;

		case 'deletar':
			$id = $_REQUEST['id'];
			$query  = 'DELETE FROM tb_comentarios WHERE id_comentario = "'.$id.'"';
			executar($query, $link);
			header("location:../index.php?pag=comentarios&resultado=Comentario+deletado!");
			exit();
		break;
		
		default:
			echo "Erro na condicao";
		break;
	}
?>
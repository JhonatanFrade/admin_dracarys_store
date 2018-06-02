<?php

//header("location:minhapg.php");
//exit();

// print_r($_REQUEST);
// die;

require_once("../inc/inc.dbadmin.php");

	$link = connect();
	
	$condicao = $_REQUEST['condicao'];

	switch ($condicao) {
		case 'inserir':
			$nome = $_POST['nome'];
			$sobrenome = $_POST['sobrenome'];
			$email = $_POST['email'];
			$CPF = $_POST['CPF'];
			$password = $_POST['senha'];
			$genero = $_POST['genero'];
			$query  = 'INSERT INTO tb_usuarios (nome, sobrenome, email, cpf, senha, genero)
			VALUES ("'.$nome.'", "'.$sobrenome.'", "'.$email.'", "'.$CPF.'", "'.$password.'", "'.$genero.'")';
			executar($query, $link);

			header("location:../index.php?pag=cliente&resultado=Sucesso!&condicao=inserir");
			exit();
		break;

		case 'deletar':
			$id = $_REQUEST['id'];
			$query  = 'DELETE FROM tb_comentarios WHERE id_usuarios= "'.$id.'"';
			executar($query, $link);
			$query  = 'DELETE FROM tb_usuarios WHERE usuario_id = "'.$id.'"';
			executar($query, $link);

			header("location:../index.php?pag=cliente&resultado=Registro+deletado!&condicao=inserir");
			exit();
		break;

		case 'editar':
			$id = $_REQUEST['id'];
			$nome = $_POST['nome'];
			$sobrenome = $_POST['sobrenome'];
			$email = $_POST['email'];
			$CPF = $_POST['CPF'];
			$password = $_POST['senha'];
			$genero = $_POST['genero'];
			$query  = 'UPDATE tb_usuarios SET nome = "'.$nome.'", sobrenome = "'.$sobrenome.'", 
			email = "'.$email.'", cpf = "'.$CPF.'", senha ="'.$password.'", genero="'.$genero.'" WHERE usuario_id='.$id;
			executar($query, $link);

			header("location:../index.php?pag=cliente&resultado=Registro+editado!&condicao=inserir");
			exit();
		break;
		
		default:
			echo "Erro na condicao";
		break;
	}
?>
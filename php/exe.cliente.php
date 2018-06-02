<?php
require_once("inc/inc.dbadmin.php");

	$link = connect();

	$query  = 'SELECT * FROM tb_usuarios';

	$res = executar($query, $link);

	$num = num_linha($res);

	// if($_REQUEST['condicao'] == null){
	// 	$_REQUEST['condicao'] = 'inserir';
	// }

	$condicao = $_REQUEST['condicao'];

	if($condicao == 'editar'){
		
		$id = $_REQUEST['id'];
	
		$queryEditar  = 'SELECT nome, sobrenome, cpf, senha, genero, dt_cadastro, email, id_casa 
					FROM tb_usuarios WHERE usuario_id ='.$id;
		
		$resEditar = executar($queryEditar, $link);

		// echo $resEditar;

		$linhaEditar = mysql_fetch_assoc($resEditar);

		//echo $linhaEditar['nome'];
		// echo $linhaEditar['sobrenome'];
		// echo $linhaEditar['email'];
		// echo $linhaEditar['cpf'];
		// echo $linhaEditar['senha'];
		//echo $linhaEditar['genero'];
	}
	
?>

<table width="100%">
	<tr>
		<td>
			<table width="100%">
				<tr align="left">
					<td>
						<!-- <form action="php/acao.cliente.php" method="POST"> -->
						<form action="<?php echo $condicao == 'editar' ? "php/acao.cliente.php?id=".$id : "php/acao.cliente.php"; ?>" method="POST">
							<h3>Nome:</h3>
							<input type="text" name="nome" value="<?php echo $condicao == 'editar' ? $linhaEditar['nome'] : ''; ?>">
							<h3>Sobrenome:</h3>
							<input type="text" name="sobrenome" value="<?php echo $condicao == 'editar' ? $linhaEditar['sobrenome'] : ''; ?>">
							<h3>E-mail:</h3>
							<input type="text" name="email" value="<?php echo $condicao == 'editar' ? $linhaEditar['email'] : ''; ?>">
							<h3>CPF:</h3>
							<input type="text" name="CPF" value="<?php echo $condicao == 'editar' ? $linhaEditar['cpf'] : ''; ?>">
							<h3>Senha:</h3>
							<input type="text" name="senha" value="<?php echo $condicao == 'editar' ? $linhaEditar['senha'] : ''; ?>">
							<h3>Genero:</h3>
							<h3>
								<input type="radio"  name="genero" value="M">Masculino
								<input type="radio" name="genero" value="F">Feminino
								<input type="radio"  name="genero" value="N">Não informar
							</h3>
							<input type="hidden" name="condicao" value="<?php echo $condicao == 'editar' ? $condicao : 'inserir'; ?>">
							<input type="submit" name="button" value="Registrar">
						</form>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>


<table width="100%">
	<tr align="center">
		<th>NOME</th>
		<th>SOBRENOME</th>
		<th>CPF</th>
		<th>SENHA</th>
		<th>GENERO</th>
		<th>DATA DO CADASTRO</th>
		<th>EMAIL</th>
		<th>CASA</th>
		<th>EDITAR</th>
		<th>EXCLUIR</th>
	</tr>
		<?php
		if($num > 0){
		$vet = mostrar($res);
		foreach ($vet as $key => $value) { ?>
	<tr align="center">
		<td><?php echo $vet[$key]['nome']; ?></td>
		<td><?php echo $vet[$key]['sobrenome']; ?></td>
		<td><?php echo $vet[$key]['cpf']; ?></td>
		<td><?php echo $vet[$key]['senha']; ?></td>
		<td><?php echo $vet[$key]['genero']; ?></td>
		<td><?php echo $vet[$key]['dt_cadastro']; ?></td>
		<td><?php echo $vet[$key]['email']; ?></td>
		<td><?php echo $vet[$key]['id_casa']; ?></td>
		<td>
			<a href='index.php?pag=cliente&condicao=editar&id=<?php echo $vet[$key]['usuario_id']; ?>'>
				<button class="btn">
					<i class="fa fa-pencil fa-fw"></i>
				</button>
			</a>
		</td>
		<td>
			<a href='php/acao.cliente.php?condicao=deletar&id=<?php echo $vet[$key]['usuario_id']; ?>'>
				<button class="btn">
					<i class="fa fa-trash"></i>
				</button>
			</a>
		</td>
	</tr>
	<?php } ?>
	<?php }else{?>
	<tr align="center">
		<td colspan="9"><?php echo "não tem registro!" ?></td>
	</tr>
	<?php } ?>
</table>


<?php
require_once("inc/inc.dbadmin.php");

	$link = connect();

	$query  = 'SELECT * FROM tb_personagens';

	$res = executar($query, $link);

	$num = num_linha($res);

	// echo $num;

	if($num > 0 ){
		$vet = mostrar($res);
	}
?>

<table width="100%">
	<tr>
		<td>
			<!-- inicio register -->
			<table width="100%">
				<tr align="left">
					<td>
						<form action="php/acao.personagem.php" method="POST">
							<h3>Nome do personagem:</h3>
							<input type="text" name="nome">
							<h3>Descricao do personagem:</h3>
							<input type="text" name="descricao">
							<h3>Situação:</h3>
							<input type="text" name="situacao">
							<h3>Imagem:</h3>
							<input type="text" name="foto">
							<br><br>
							<input type="submit" name="button" value="Registrar">
						</form>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<table width="80%">
	<tr align="center">
		<th>NOME</th>
		<th>DESCRICAO</th>
		<th>SITUAÇÃO</th>
	</tr>
<?php foreach ($vet as $key => $value) { ?>
	<tr align="center">
		<td width="20%"><?php echo $vet[$key]['nome']; ?></td>
		<td width="30%"><?php echo $vet[$key]['descricao']; ?></td>
		<td width="30%"><?php echo $vet[$key]['situacao']; ?></td>
		<td><button class="btn"><i class="fa fa-pencil fa-fw"></i> Editar</button></td>
		<td><button class="btn"><i class="fa fa-trash"></i> Deletar</button></td>
	</tr>
<?php } ?>
</table>
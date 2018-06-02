<?php
require_once("inc/inc.dbadmin.php");

	$link = connect();

	$query  = 'SELECT * FROM tb_produtos';

	$res = executar($query, $link);

	$num = num_linha($res);
?>

<table width="100%">
	<tr>
		<td>
			<!-- inicio register -->
			<table width="100%">
				<tr align="left">
					<td>
						<form action="php/acao.produto.php" method="POST">
							<h3>Nome do produto:</h3>
							<input type="text" name="nome">
							<h3>Descricao do produto:</h3>
							<input type="text" name="descricao">
							<h3>Valor do produto:</h3>
							<input type="text" name="valor">
							<input type="hidden" name="condicao" value="inserir">
							<br><br>
							<input type="submit" name="button" value="Registrar">
						</form>
					</td>
				</tr>
			</table>
			<!-- fim register -->
		</td>
	</tr>
</table>

<table width="90%">
	<tr align="center">
		<th>NOME</th>
		<th>DESCRICAO</th>
		<th>VALOR</th>
		<th>DATA DO CADATROS</th>
		<th>EDITAR</th>
		<th>EXCLUIR</th>
	</tr>
		<?php
		if($num > 0){
		$vet = mostrar($res);
		foreach ($vet as $key => $value) { ?>
		<tr align="center">
		<td><?php echo $vet[$key]['nome']; ?></td>
		<td><?php echo $vet[$key]['descricao']; ?></td>
		<td><?php echo $vet[$key]['valor']; ?></td>
		<td><?php echo $vet[$key]['dt_cadastro']; ?></td>
		<td><button class="btn"><i class="fa fa-pencil fa-fw"></i></button></td>
		<td><a href='php/acao.produto.php?condicao=deletar&id=<?php echo $vet[$key]['produto_id']; ?>'><button class="btn"><i class="fa fa-trash"></i></button></a></td>
	</tr>
	<?php } ?>
	<?php }else{?>
	<tr align="center">
		<td colspan="9"><?php echo "<p><b>não tem registro!</b></p>" ?></td>
	</tr>
	<?php } ?>
</table>


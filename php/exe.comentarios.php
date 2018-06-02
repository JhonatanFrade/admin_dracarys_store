<?php
require_once("inc/inc.dbadmin.php");

	$link = connect();

	$query  = 'SELECT * FROM tb_comentarios';

	$res = executar($query, $link);

	$num = num_linha($res);
?>

<table width="100%">
	<tr align="left">
		<td>
			<form action="php/acao.comentarios.php" method="POST">
				<h3>comentario:</h3>
				<input type="text" name="comentario">
				<h3>usuario:</h3>
				<input type="text" name="id_usuarios">
				<input type="hidden" name="condicao" value="inserir">
				<br><br>
				<input type="submit" name="button" value="Registrar">
			</form>
		</td>
	</tr>
</table>

<table width="80%">
	<tr align="center">
		<th>COMENTARIO</th>
		<th>USUARIO</th>
		<th>DATA</th>
		<th>EDITAR</th>
		<th>EXCLUIR</th>
	</tr>
		<?php
		if($num > 0){
		$vet = mostrar($res);
		foreach ($vet as $key => $value) { ?>
	<tr align="center">
		<td width="30%"><?php echo $vet[$key]['comentario']; ?></td>
		<td width="30%"><?php echo $vet[$key]['id_usuarios']; ?></td>
		<td width="30%"><?php echo $vet[$key]['data']; ?></td>
		<td><button class="btn"><i class="fa fa-pencil fa-fw"></i></button></td>
		<td><a href='php/acao.comentarios.php?condicao=deletar&id=<?php echo $vet[$key]['id_comentario']; ?>'><button class="btn"><i class="fa fa-trash"></i></button></a></td>

	</tr>
<?php } ?>
	<?php }else{?>
	<tr align="center">
		<td colspan="9"><?php echo "<p><b>não tem registro!</b></p>" ?></td>
	</tr>
	<?php } ?>
</table>
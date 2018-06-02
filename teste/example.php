<?php
require_once("inc/inc.dbadmin.php");

	$link = connect();

	$query  = 'SELECT * FROM tb_usuarios';

	$res = executar($query, $link);

	$num = num_linha($res);

	// echo $num;

	if($num > 0 ){
		$vet = mostrar($res);
	}
	// print_r($vet);

	echo '<br><br><br>';
	echo '<table border="1" width="80%">';
	echo '<tr align="center">';
	echo '<th>NOME</th>';
	echo '<th>SOBRENOME</th>';
	echo '<th>CPF</th>';
	echo '<th>SENHA</th>';
	echo '<th>GENERO</th>';
	echo '<th>DATA DO CADASTRO</th>';
	echo '<th>EMAIL</th>';
	echo '<th>CASA</th>';
	echo '</tr>';
	foreach ($vet as $key => $value) {
		echo '<tr align="center">';
		echo '<td>'.$vet[$key]['nome'].'</td>';
		echo '<td>'.$vet[$key]['sobrenome'].'</td>';
		echo '<td>'.$vet[$key]['cpf'].'</td>';
		echo '<td>'.$vet[$key]['senha'].'</td>';
		echo '<td>'.$vet[$key]['genero'].'</td>';
		echo '<td>'.$vet[$key]['dt_cadastro'].'</td>';
		echo '<td>'.$vet[$key]['email'].'</td>';
		echo '<td>'.$vet[$key]['casa'].'</td>';
		echo '</tr>';
	}
	echo '</table>';
?>

<?php
require_once("inc/inc.dbadmin.php");

	$link = connect();

	$query  = 'SELECT * FROM tb_produtos';

	$res = executar($query, $link);

	$num = num_linha($res);

	// echo $num;

	if($num > 0 ){
		$vet = mostrar($res);
	}
	// print_r($vet);

	echo '<br><br><br>';
	echo '<table border="1" width="80%">';
	echo '<tr align="center">';
	echo '<th>NOME</th>';
	echo '<th>DESCRICAO</th>';
	echo '<th>VALOR</th>';
	echo '<th>DATA DO CADATROS</th>';
	echo '</tr>';
	foreach ($vet as $key => $value) {
		echo '<tr align="center">';
		echo '<td>'.$vet[$key]['nome'].'</td>';
		echo '<td>'.$vet[$key]['descricao'].'</td>';
		echo '<td>'.$vet[$key]['valor'].'</td>';
		echo '<td>'.$vet[$key]['dt_cadastro'].'</td>';
		echo '</tr>';
	}
	echo '</table>';
?>

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
	// print_r($vet);

	echo '<br><br><br>';
	echo '<table border="1" width="80%">';
	echo '<tr align="center">';
	echo '<th>NOME</th>';
	echo '<th>DESCRIÇÃO</th>';
	echo '<th>SITUAÇÃO</th>';
	echo '</tr>';
	foreach ($vet as $key => $value) {
		echo '<tr align="center">';
		echo '<td>'.$vet[$key]['nome'].'</td>';
		echo '<td>'.$vet[$key]['descricao'].'</td>';
		echo '<td>'.$vet[$key]['situacao'].'</td>';
		echo '</tr>';
	}
	echo '</table>';
?>
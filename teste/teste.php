<?php

	require_once("../inc/inc.dbadmin.php");

	$link = connect();

	$query  = 'SELECT * FROM tb_usuarios';

	$res = mysql_query($query, $link) or die(mysql_error());

	// echo $res;

	// echo '<br>';

	$num = mysql_num_rows($res);

	if($num > 0){

		while($linha = mysql_fetch_assoc($res)){
			// echo $linha['nome'].'<br>';
			// print_r($linha);
			$vet[] = $linha;
		}

	}else{
		echo 'Nenhum registro encontrado!';
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

	//executar($query, $link);

	//echo "passou aqui"

?>
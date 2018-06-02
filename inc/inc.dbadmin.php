<?php

	function connect(){
		define ("HOST", "localhost");
		define ("USER", "root");
		define ("PASS", "");
		define ("BASE", "dracarys_store_db");

		$link = mysql_connect(HOST, USER, PASS) or  die ("Conexão falhou!");

		mysql_select_db(BASE, $link) or die ("Erro ao conectar com a base");

		return $link;
	}

	function executar($query, $link){
		$res = mysql_query($query, $link) or die(mysql_error());
		return $res;
	}

	function mostrar($res){		
		$vet = array();		
		while($linha = mysql_fetch_assoc($res)){
			$vet[] = $linha;
		}
		return $vet;
	}

	function num_linha($res){
		$num = mysql_num_rows($res);
		return $num;
	}

?>
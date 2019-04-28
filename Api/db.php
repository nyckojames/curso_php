<?php
	
	function getConexao()
	{
		try {
		 	$username = 'root';
			$password = '';
		 	$conexao = new PDO("mysql:host=localhost;port=3306;dbname=curse_php01", $username, $password);
		 	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 	var_dump($conexao);exit();
		 	return $conexao;
		 	
		 } catch (PDOException $e) {		 	
		 	 echo 'ERROR: ' . $e->getMessage();
		 }
	}


	//RESOLVER ESSA PORRA DE PROBLEMA PORQUE NÃO TA CONECTANDO COM O BANCO DE DADOS
	/* */

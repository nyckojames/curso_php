<?php  

function getProdutos(){
	$dados = array(
		["Titulo" => "Php Básico", "Descricao" => "Curso de php básico", "valor"=> "120.90"],
		["Titulo" => "Php Intermediário", "Descricao" => "Curso de php intermédiario", "valor"=> "220.90"],
		["Titulo" => "Php Avançado", "Descricao" => "Curso de php Avançado com Poo e Pdo", "valor"=> "420.90"]
	);

	$conexao = getConexao();
	$select = "select * from produtos";
	$ret = $conexao->query($select);
	$produtos = $ret->fetchAll();
	var_dump($conexao);exit();
	return $conexao;
}

function buscaProdutos($busca){
	$produtos = getProdutos();
	$result = [];
	foreach ($produtos as $produto) {
		//$exist = in_array($busca, $produto);
		$exist = in_array(strtolower($busca), array_map('strtolower', $produto));
		if ($exist == true) {
			array_push($result, $produto);
		}
	}
	//var_dump($result);exit();
	return $result;

}

?>
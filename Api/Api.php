<?php
include('db.php');
include('config.php');
include('users.php');
include('produtos.php');

function getPages(){
	$url = $_SERVER['REQUEST_URI'];
	$url = explode("?", $url); 
	$url = $url[0]; 
	$metodo = $_SERVER['REQUEST_METHOD'];
	if($metodo == "GET"){
		switch ($url) {
			case '/':
			$produtos = getProdutos();
				include("../Pages/home.php");
				break;
			case '/home':
			$produtos = getProdutos();
				include("../Pages/home.php");
				break;
			case '/sobre':
			
				include("../Pages/sobre.php");
				break;
			case '/contato':
			$produtos = getProdutos();
				include("../Pages/contato.php");
				break;
			case '/busca':
			$produtos = buscaProdutos($_GET['busca']);			
				include("../Pages/home.php");
				break;
			default:
			
				include("../Pages/home.php");
				break;
		}
	}
	if($metodo == "POST"){
		echo "POST";exit();
	}
	
	// include("../Pages/home.php");
}

?>
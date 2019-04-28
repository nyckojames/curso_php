<?php
	function getUser(){
		$data  = [['nome' => "Danilo" , 'email' => "danilo@mail.com"],
				  ['nome' => "Maria" , 'email' => "maria@mail.com"],
				  ['nome' => "Paulo" , 'email' => "paulo@mail.com"],
				  ['nome' => "Fernando" , 'email' => "fernando@mail.com"]
				];
			return $data;
	}

		function exibiUsuário(){
		$lUsuarios = getUser();
		$html = "";

		foreach ($lUsuarios as $key => $fUsuario) {
			$nome = $fUsuario["nome"];
			$email = $fUsuario["email"];
			$html .= "<li>Nome:$nome - Email:$email</li>";
		}

		return $html;
	}
?>
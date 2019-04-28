
	<h2><?php echo getInfo("Titulo");?> </h2>
	<p><?php echo getinfo("descricao");?></p>
	<br>
	<h2> Pesquisar </h2>
	<form action="busca" method="GET">
		<input type="text" name="busca" placeholder="Buscar">
		<button>Pesquisar</button>
	</form>
	<br>
	<h2>Lista de Produtos</h2>
	<ul>

		<?php $produtos = getProdutos(); foreach($produtos as $Produto): ?>

		<li><?php echo  $Produto['Titulo']." - ".$Produto['descricao']." - "."R$".number_format($Produto['valor'],2,",","."); ?></li>

		<?php endforeach;?>
	
	</ul>
 	
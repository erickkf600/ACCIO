<?php 
	$titulo = strip_tags($_POST['titulo']);
	$codigo = strip_tags($_POST['codigo']);
	$categoria = strip_tags($_POST['categoria']);
	$subcategoria = strip_tags($_POST['subcategoria']);
	$preco = strip_tags($_POST['preco']);
	$estoque = strip_tags($_POST['estoque']);
	$detalhes = $_POST['detalhes'];
	$conteudo = $_POST['conteudo'];

	include "banco.php";

	$query = "insert into produto(
	titulo,
	codigo,
	categoria, 
	subcategoria, 
	preco,
	estoque,
	detalhes, 
	conteudo) 
	
	values(
	'$titulo', 
	'$codigo', 
	'$categoria', 
	'$subcategoria', 
	'$preco',
	'$estoque', 
	'$detalhes', 
	'$conteudo')";

	mysqli_query($con, $query);

	include "upload.php";

	echo "<h1>$titulo</h1><p>Foi Adicionado ao sistema.</p>";

	header("Refresh: 3, admin.php");


?>
<?php 
	$nome = strip_tags($_POST['nome']);
	$email = strip_tags($_POST['email']);
	$telefoneFixo = strip_tags($_POST['telefoneFixo']);
	$telefoneCel = strip_tags($_POST['telefonecel']);

	$cep = strip_tags($_POST['cep']);
	$endereco = strip_tags($_POST['endereco']);
	$cidade = strip_tags($_POST['cidade']);
	$bairro = strip_tags($_POST['bairro']);

	$dataNasc = strip_tags($_POST['dataNasc']);
	$cpf = strip_tags($_POST['cpf']);
	$usuario = strip_tags($_POST['usuario']);
	$senha = md5(strip_tags($_POST['senha']));

	include "banco.php";
	$query = "insert into login(usuario, nome, cpf, email, senha, dataNasc, endereco, bairro, cidade, telefoneFixo, telefoneCel,cep) 
	values('$usuario', '$nome', '$cpf', '$email', '$senha', '$dataNasc', '$endereco', '$bairro', '$cidade', '$telefoneFixo', '$telefoneCel','cep')";
	mysqli_query($con, $query);
	session_start();
	$_SESSION['nome'] = $nome;
	$_SESSION['email'] = $email;
	header("Location: index.php");
?>
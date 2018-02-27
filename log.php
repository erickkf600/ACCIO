<?php 
   $email = $_POST['email'];
	$senha = md5($_POST['senha']);


	include "banco.php";

	$query = "select * from login where email = '$email' and senha = '$senha' limit 1";

	$consulta = mysqli_query($con, $query);

	$total = mysqli_num_rows($consulta);
	if($total == 0){
		header("Location: index.php");
	}

	if($usuario = mysqli_fetch_assoc($consulta)){
		$nome = $usuario['nome'];
	}

	session_start();
	$_SESSION['nome'] = $nome;
	$_SESSION['email'] = $email;
	header("Location: perfil.php");
?>
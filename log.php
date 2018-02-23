<?php 
    $email = $_POST['email'];
	$senha = md5(string_tag(($_POST['senha'])));

	include "banco.php";

	$query = "select * from login where email = '$email' and senha = '$senha' limit 1";
	$consulta = mysqli_query($con,$query);
	$total = mysqli_num_rows($consulta);
	if($total == 0){
		header("Location:index.php");
	}
	while ($email = mysqli_fetch_array($consulta)){
		$email = $email['email'];
	}
	session_start();

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;

?>
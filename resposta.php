<?php 
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	
	include "banco.php";

	$query = "select * from login where email = '$email' and senha = '$senha' limit 1";

	$consulta = mysqli_query($con, $query);

	$total = mysqli_num_rows($consulta);

	if($total == 1){
		if(empty($_POST['conectar'])){
			session_start();
			$_SESSION['email'] = $email;
		}else{
			setcookie("email", $email, time()+60*2 );
		}
		if($email == 'adm@gmail.com'){
		  header("Location:admin.php");
	    }
	    
	}
		  header("Location:index.php");

	

?>

<?php
session_start();
include_once("conexao.php");

$email = filter_input(INPUT_GET, 'email');
$user = filter_input(INPUT_GET, 'user');


$result_usuario = "INSERT INTO usuarios (email, user) VALUES ('$email', '$user')";

$resultado = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
$resultado = $resultado->fetch_all(MYSQLI_ASSOC);
$resultado = count($resultado);

if ($resultado == 0){	
	if ($senha == $confirmesenha){
		if (mysqli_query($conn, $result_usuario)){
			$_SESSION['msg'] = "<center><p style='color:green;'>Usuário cadastrado com sucesso</p></center>";
			header("Location: register.php");
		}else{
			$_SESSION['msg'] = "<center><p style='color:red;'>Usuário não foi cadastrado com sucesso</p></center>";
			header("Location: register.php");
		}	
	}else{
		$_SESSION['msg'] = "<center><p style='color:red;'>Confirme a Senha  -($resultado)-</p></center>"; 
		header("Location: register.php");
	}
}else{
	$_SESSION['msg'] = "<center><p style='color:red;'>Email já utilizado</p></center>"; 
	header("Location: register.php");
}

?>
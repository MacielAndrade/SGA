<?php
session_start();
include('conexao.php');
 
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: ../telas/login/login.php');
	exit();
}
 
$email = $_POST['email'];
$senha = $_POST['senha'];
 
$sql = "SELECT nome_funcionario FROM funcionario WHERE email_funcionario = '$email' AND senha_funcionario =md5('$senha')";

 
 $result = mysqli_query($conn, $sql);

 
$linha = mysqli_fetch_assoc($result);
$usuario = $linha['nome_funcionario'];
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['nome_funcionario'] = $usuario;
	header('Location: ../telas/agenda/agenda.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../telas/login/login.php');
	exit();
}

?>
<?php
if(!$_SESSION['nome_funcionario']) {
	header('Location: ../login/login.php');
	exit();
}
?>
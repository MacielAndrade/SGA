<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="../../assets/css/login.css" rel="stylesheet">
	<title>Projeto Login</title>
</head>
<body>
<div id="corpo-form">
	<h1>Entrar</h1>
	<form action="../../controle/sistema_login.php" method="POST">
		<input type="email" placeholder="E-mail" name='email'>
		<input type="password" placeholder="Senha" name='senha'>
		<input type="submit" value="ACESSAR" class="entrar">

	</form>
	<?<?php 
	if (isset($_SESSION['nao_autenticado'])){?>
	<div class="msg_erro">
	Email e/ou senha estão incorretos!</div>
	<?php 
	}

	unset($_SESSION['nao_autenticado']);
	 ?>
</div>
	
</body>
</html>
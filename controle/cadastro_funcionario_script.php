<?php
  include "conexao.php";

  $nome = $_POST["nome"];
  $cpf = $_POST["cpf"];
  $telefone = $_POST["telefone"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "INSERT INTO funcionario(nome_funcionario, cpf_funcionario, email_funcionario, telefone_funcionario, senha_funcionario) VALUES ('$nome','$cpf','$email','$telefone', md5('$senha'))";

  if(mysqli_query($conn, $sql)){
    mensagem ("$nome Cadastrado com Sucesso", "success");
    header("location: ../telas/funcionario/listarFuncionarios.php");
  }else {
    mensagem ("Não foi possivel cadastrar $nome", "danger");
  }


  
?>

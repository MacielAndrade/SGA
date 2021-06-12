<?php
  include "conexao.php";
  $id = $_POST["id"];
  $nome = $_POST["nome"];
  $cpf = $_POST["cpf"];
  $telefone = $_POST["telefone"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "UPDATE funcionario SET nome_funcionario = '$nome', cpf_funcionario = '$cpf', telefone_funcionario = '$telefone', email_funcionario = '$email', senha_funcionario = md5('$senha') WHERE cod_funcionario = $id";

  if(mysqli_query($conn, $sql)){
    mensagem ("$nome Alterado com Sucesso", "danger");
    header("location: ../telas/funcionario/listarFuncionarios.php");
  }else {
    mensagem ("Não foi possivel Alterar para $nome");
  }


  
?>

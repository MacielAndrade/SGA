<?php
  include "conexao.php";
  $id = $_GET['id'];

  $sql = "DELETE  FROM funcionario WHERE cod_funcionario = $id";

  if(mysqli_query($conn, $sql)){
    mensagem ("$nome Excluido com Sucesso", "success");
    header("location: ../telas/funcionario/listarFuncionarios.php");
  }else {
    mensagem ("Não foi possivel Excluir para $nome", "danger");
  }

  
  
?>
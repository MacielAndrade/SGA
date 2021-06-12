<?php
  include "conexao.php";
  $id = $_POST['id'];
  $servico = $_POST["servico"];
  $valorServico = $_POST["valorServico"];
  $descricao = $_POST["descricao"];

  $sql = "UPDATE catalogo_servicos SET nome_servico = '$servico', valor_servico = '$valorServico', descricao_servico = '$descricao' WHERE cod_servico = $id";

  if(mysqli_query($conn, $sql)){
    mensagem ("$servico Alterado com Sucesso", "danger");
    header("location: ../telas/servico/listarServico.php");
  }else {
    mensagem ("Não foi possivel Alterar para $servico");
  }


  
?>

<?php
  include "conexao.php";
  $id = $_GET['id'];

  $sql = "DELETE  FROM catalogo_servicos WHERE cod_servico = $id";

  if(mysqli_query($conn, $sql)){
    mensagem ("Excluido com Sucesso", "success");
    header("location: ../telas/servico/listarServico.php");
  }else {
    mensagem ("Não foi possivel Excluir", "danger");
  }
?>
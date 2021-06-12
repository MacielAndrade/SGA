<?php
  include "conexao.php";
  $id = $_GET['id'];

  $sql = "DELETE  FROM cliente WHERE cod_cliente = $id";

  if(mysqli_query($conn, $sql)){
    mensagem ("$nome Excluido com Sucesso", "success");
    header("location: ../telas/cliente/listarClientes.php");
  }else {
    mensagem ("Não foi possivel Excluir para $nome", "danger");
  }

  
  
?>
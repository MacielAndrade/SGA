<?php
  include "conexao.php";
  $id = $_POST['id'];
  $nome = $_POST["nome"];
  $cpf = $_POST["cpf"];
  $datanasc = $_POST["datanasc"];
  $telefone = $_POST["telefone"];
  $endereco = $_POST["endereco"];

  $sql = "UPDATE cliente SET nome_cliente = '$nome', cpf_cliente = '$cpf', data_nasc_cliente = '$datanasc', telefone_cliente = '$telefone', endereco_cliente ='$endereco' WHERE cod_cliente = $id";

  if(mysqli_query($conn, $sql)){
    mensagem ("$nome Alterado com Sucesso", "danger");
    header("location: ../telas/cliente/listarClientes.php");
  }else {
    mensagem ("Não foi possivel Alterar para $nome");
  }


  
?>

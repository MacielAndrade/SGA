<?php
  include "conexao.php";

  $nome = $_POST["nome"];
  $cpf = $_POST["cpf"];
  $datanasc = $_POST["datanasc"];
  $telefone = $_POST["telefone"];
  $endereco = $_POST["endereco"];

  $sql = "INSERT INTO cliente(nome_cliente, cpf_cliente, data_nasc_cliente, telefone_cliente, endereco_cliente) VALUES ('$nome','$cpf','$datanasc','$telefone','$endereco')";

  if(mysqli_query($conn, $sql)){
    mensagem ("$nome Cadastrado com Sucesso", "success");
    header("location: ../telas/cliente/listarClientes.php");
  }else {
    mensagem ("Não foi possivel cadastrar $nome", "danger");
  }


  
?>

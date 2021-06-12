<?php
  include "conexao.php";

  $servico = $_POST["servico"];
  $valorServico = $_POST["valorServico"];
  $descricao = $_POST["descricao"];
  

  $sql = "INSERT INTO catalogo_servicos(nome_servico, valor_servico, descricao_servico) VALUES ('$servico','$valorServico','$descricao')";

  if(mysqli_query($conn, $sql)){
    mensagem ("$servico Cadastrado com Sucesso", "success");
    header("location: ../telas/servico/listarServico.php");
  }else {
    mensagem ("Não foi possivel cadastrar $servico", "danger");
  }


  
?>

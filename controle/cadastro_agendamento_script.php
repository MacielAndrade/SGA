<?php
  include "conexao.php";

  $servico = $_POST["servico"];
  $cliente = $_POST["cliente"];
  $start = $_POST["start"];
  $end = $_POST["end"];
  $cor = $_POST["cor"];

  //Conversão da data para envio para o banco
  $data_start = str_replace('/', '-', $start);
  $data_start_convert = date("Y-m-d H:i:s", strtotime($data_start));

  $data_end = str_replace('/', '-', $end);
  $data_end_convert = date("Y-m-d H:i:s", strtotime($data_end));



   //echo "$servico, $cliente, $data_start_convert, $data_end_convert ,$cor";

 $sql = "insert into agendamento (inicio_atend_agendamento, final_atend_agendamento, cod_cliente, cod_pagamento, cod_cor, cod_funcionario, cod_servico) values ('$data_start_convert', '$data_end_convert', '$cliente', '1', '$cor','2', '$servico')";



  if(mysqli_query($conn, $sql)){
    mensagem ("$servico Cadastrado com Sucesso", "success");
    header("location: ../telas/agenda/agenda.php");
  }else {

    mensagem ("Não foi possivel cadastrar $servico", "danger");
  }
  


  
?>

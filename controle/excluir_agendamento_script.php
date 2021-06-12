<?php
  include "conexao.php";


   $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

  $sql = "DELETE  FROM agendamento WHERE cod_agendamento = $id";

  if(mysqli_query($conn, $sql)){
    mensagem ("$nome Excluido com Sucesso", "success");
    header("location: ../telas/agenda/agenda.php");
  }else {
    mensagem ("Não foi possivel Excluir para $nome", "danger");
  }

  
  
?>
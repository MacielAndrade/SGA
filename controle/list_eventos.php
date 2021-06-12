<?php
 include "conexao.php";

 $sql = "SELECT a.cod_agendamento, cs.nome_servico, cs.descricao_servico, c.referencia_cor, a.inicio_atend_agendamento, a.final_atend_agendamento AS agendamento FROM agendamento a INNER JOIN cor c ON a.cod_cor = c.cod_cor INNER JOIN catalogo_servicos cs ON a.cod_servico = cs.cod_servico";

	$dados = mysqli_query($conn, $sql);
		
	$linha = mysqli_fetch_assoc($dados);
	
	$eventos = [];

	while ($linha = mysqli_fetch_assoc($dados)){
        $cod_agendamento = $linha['cod_agendamento'];
        $nome_servico = $linha['nome_servico'];
        $referencia_cor = $linha['referencia_cor'];
        $inicio_atend_agendamento = $linha['inicio_atend_agendamento'];
        $final_atend_agendamento = $linha['agendamento'];
        $descricao_servico = $linha['descricao_servico'];

        $eventos[] = [
        	'id' => $cod_agendamento,
        	'title' => $nome_servico,
        	'color' => $referencia_cor,
        	'start' => $inicio_atend_agendamento,
        	'end' => $final_atend_agendamento,
            'descricao' => $descricao_servico
        ];
    }
   
   	echo json_encode($eventos);

 ?>
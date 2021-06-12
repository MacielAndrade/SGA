<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$bd = "sga";

	if ($conn = mysqli_connect($server, $user,$pass, $bd)){
		
	}else {
		mensagem("Erro ao Conectar com Banco de Dados", "danger");
	}


	function mensagem($texto, $tipo){
		echo "<div class='alert alert-$tipo' role='alert'>
			  $texto </div>";
	}

	function mostra_data($data){
		$d = explode('-', $data);
		
		if(empty($d[0] && $d[1] && $d[0])){
          $d[0] = '0000';
          $d[1] = '00';
          $d[2] = '00';
        } 
        $escreve= $d[2]."/".$d[1]."/".$d[0];
		return $escreve;
	}
?>
<?php
session_start();
include('../../controle/verifica_login.php');
?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <!-- FIM DAS IMPORTAÇÕES-->
    <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../../assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>SGA</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../../assets/css/demo.css" rel="stylesheet" />
        <!-- fontawesome -->
        <link href="../../fontawesome/css/all.css" rel="stylesheet">
        <!-- Formatação do Formulario -->
        <link href="../../assets/css/formulario.css" rel="stylesheet">
        <link href="../../assets/css/bootstrap.css" rel="stylesheet">

         <!-- IMPORTAÇÕES DO CALENDARIO -->
        <link href='../../assets/lib/main.css' rel='stylesheet' />
        <script src='../../assets/lib/main.js'></script>
        <script src='../../assets/lib/locales/pt-br.js'></script>
        <!-- Importação da função de detalhamento do calendario-->
        <script src='../../assets/js/calendarioPersonalizado.js'></script>
        <link href="../../assets/css/calendarioPersonalizado.css" rel="stylesheet">
        <!-- FIM DAS IMPORTAÇÕES-->
</head>
    

<body>
    <!-- INICIO MENU LATERAL-->
    <div class="wrapper">
        <div class="sidebar" data-image="../../assets/img/salao1.jpg" data-color ="blue">
        
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="./agenda.php" class="simple-text">
                        <img src="../../assets/img/logomarca.png">
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active" >
                        <a class="nav-link" href="./agenda.php">
                            <i class="far fa-calendar-alt"></i>
                            <p>AGENDA</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../servico/servico.php">
                            <i class="fas fa-chart-line"></i>
                            <p>SERVIÇOS</p>
                        </a>

                    </li>
                    <li >
                        <a class="nav-link" href="../cliente/cliente.php">
                            <i class="fas fa-user-tag"></i>
                            <p>CLIENTES</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../historicoCliente/historicoCliente.php">
                            <i class="fas fa-history"></i>
                            <p>HISTORICO CLIENTE</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../pagamento/pagamento.php">
                            <i class="fas fa-comment-dollar"></i>
                            <p>PAGAMENTO</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../funcionario/funcionario.php">
                            <i class="far fa-user"></i>
                            <p>FUNCIONARIO</p>
                        </a>
                    </li>
                    
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="../../controle/logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            <p><?php echo $_SESSION['nome_funcionario'];?></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
         <!-- FIM DO MENU LATERAL -->

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="" style="padding-left: 40%;
                    "> AGENDA </a>
    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav ml-auto">
                            
                        </ul>
                    </div>
                </div>
            </nav>
          <div class="content">
                <div class="container-fluid">
                  <div class="row " >
                    <div class="col-sm-12" > 
                      <div class="row " >
                       <div id='calendar'></div>

                          <!-- Modal de Visualizar dados ja cadastrados -->
                          <div class="modal fade" id="visualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do Agendamento</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <!-- envio do ID-->
                                    
                                    <dl class="row">
                                      <dt class="col-sm-3">ID do Agendamento: </dt>
                                      <dd class="col-sm-9" id="id"></dd>

                                      <dt class="col-sm-3">Serviço a ser Realizado:</dt>
                                      <dd class="col-sm-9" id="title"></dd>

                                      <dt class="col-sm-3">Inicio: </dt>
                                      <dd class="col-sm-9" id="start"></dd>

                                      <dt class="col-sm-3">Previsão para fim:</dt>
                                      <dd class="col-sm-9" id="end"></dd>
                                    </dl>
                                    <a href="" id="desmarcar_agendamento" class="btn btn-danger">Desmarcar</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- fim modal -->

                          <!-- Modal de cadastrar dados-->
                          <div class="modal fade" id="cadastrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Agendar Serviço</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <!--inicio do formulario-->
                                  <div class="content">
                                        
                                    <form action="../../controle/cadastro_agendamento_script.php" method="POST">
                                      <div class="row mb-3">
                                        <!-- SELECIONAR SERVIÇO-->
                                       <?php
                                              include "../../controle/conexao.php";
                                              $sql_servico="SELECT * FROM catalogo_servicos";
                                              $dados_servico = mysqli_query($conn, $sql_servico);
                                              
                                        ?>
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Serviço:</label>
                                          <div class="col-sm-10">
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="servico">
                                             
                                              <?php
                                              while ($linha_servico = mysqli_fetch_assoc($dados_servico)){
                                                  $cod_servico = $linha_servico['cod_servico'];
                                                  $nome_servico = $linha_servico['nome_servico'];
                                              
                                              echo "<option value='$cod_servico'>$nome_servico</option>";
                                              }
                                              ?>

                                            </select>
                                          </div>
                                      </div>


                                      <div class="row mb-3">
                                        <!-- SELECIONAR CLIENTE-->
                                        <?php
                                              $sql_cliente="SELECT * FROM cliente";
                                              $dados_cliente = mysqli_query($conn, $sql_cliente);
                                              
                                        ?>
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Cliente:</label>
                                          <div class="col-sm-10">
                                           <select class="form-select" aria-label="Default select example" name="cliente">
                                             
                                             <?php

                                              while ($linha_cliente = mysqli_fetch_assoc($dados_cliente)){
                                                  $cod_cliente = $linha_cliente['cod_cliente'];
                                                  $nome_cliente = $linha_cliente['nome_cliente'];
                                              
                                              echo "<option value='$cod_cliente'>$nome_cliente</option>";
                                              }
                                              ?>

                                           </select>
                                          </div>
                                      </div>
                                      <h5 style="text-align: center;">Data e Horario Agendamento</h5>

                                      <div class="row mb-3">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Incio</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="start" id="start" onkeypress="DataHora(event,this)" required>
                                          </div>
                                      </div>

                                      <div class="row mb-3">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Fim:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="end" id="end" onkeypress="DataHora(event,this)" required>
                                          </div>
                                      </div>


                                      <div class="row mb-3">
                                        <!-- SELECIONAR COR-->
                                        <?php
                                              $sql_cor="SELECT * FROM cor";
                                              $dados_cor = mysqli_query($conn, $sql_cor);
                                              
                                        ?>
                                      <label class="col-sm-2 col-form-label">Cor</label>
                                        <div class="col-sm-10">
                                            <select name="cor" class="form-control" id="cor">
                                              <?php

                                              while ($linha_cor = mysqli_fetch_assoc($dados_cor)){
                                                  $cod_cor = $linha_cor['cod_cor'];
                                                  $nome_cor = $linha_cor['nome_cor'];
                                                  $referencia_cor = $linha_cor['referencia_cor'];
                                              
                                              echo "<option style='color:$referencia_cor;' value='$cod_cor'>$nome_cor</option>";
                                              }
                                              ?>
                                            </select>
                                        </div>
                                      <div>

                                     <button class="btn btn-info btn-fill pull-right" type="submit" padding-top= "5px">Cadastrar</button>
                                      </div>                   
                                    </form>          
                                </div>
                              </div>
                            </div>
                          </div> 

                      </div>
                  </div>
              </div>
              </div>
          </div>
          
        

        <!-- FIM CALENDARIO -->
            <!--INICIO fooder-->      
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center" >
                            <p style="text-align: center; padding-top: 10px;">&copy; 2021 - Todos direitos reservados ao Maciel Andrade</p>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../../assets/js/plugins/bootstrap-switch.js"></script>

<script src="../../assets/js/bootstrap.bundle.min.js"></script>

<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>

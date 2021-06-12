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
    <!-- FIM DAS IMPORTAÇÕES-->
</head>
    

<body>
    <!-- INICIO MENU LATERAL-->
    <div class="wrapper">
        <div class="sidebar" data-image="../../assets/img/salao1.jpg" data-color ="blue">
        
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="../agenda/agenda.php" class="simple-text">
                        <img src="../../assets/img/logomarca.png">
                    </a>
                </div>
                <ul class="nav">
                    <li >
                        <a class="nav-link" href="../agenda/agenda.php">
                            <i class="far fa-calendar-alt"></i>
                            <p>AGENDA</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./servico.php">
                            <i class="fas fa-chart-line"></i>
                            <p>SERVIÇOS</p>
                        </a>

                    </li>
                    <li>
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

         <?php
              include "../../controle/conexao.php";
              if(isset($_GET['id'])){
                $id = $_GET['id'];
              } else {
                $id ='';
              }
              
              $sql="SELECT * FROM catalogo_servicos WHERE cod_servico = $id";
              $dados = mysqli_query($conn, $sql);

              $linhaAlteração = mysqli_fetch_assoc($dados);

            ?>


        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="" style="padding-left: 40%;
                    "> CADASTRO DE SERVIÇOS </a>
    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="listarServico.php" class="btn btn-info btn-fill pull-right" type="submit" style="margin-top: 20px;"  >Listar Servicos</a>
 
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="content">
                <div class="container-fluid">
                  <div class="row " >
                    <div class="col-sm-12" > 
                      <div class="row " >
                        <main class="form-signin">
                          <form action="../../controle/alterar_servico_script.php" method="POST">
                            <div class="form-group">
                                <label>Serviço</label>
                                <input type="text" name="servico" id="servico" class="form-control" placeholder="Serviço" required value="<?php echo $linhaAlteração['nome_servico'];?>"> 
                            </div>

                            <div class="form-group">
                                <label>Descrição do Serviço</label>
                                <textarea type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição do Serviço"><?php echo $linhaAlteração['descricao_servico'];?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="floatingInput">Valor do Serviço</label>
                                <input type="text" class="form-control"  name="valorServico" id="valorServico" placeholder="Valor do Serviço" value="<?php echo $linhaAlteração['valor_servico'];?>">
                            </div>
                            <input type="hidden" name="id" value="<?php echo $linhaAlteração['cod_servico'];?>">
                            <div>
                            <button class="btn btn-info btn-fill pull-right" type="submit" padding-top= "5px">Atualizar Servico</button>
                            </div>                   
                          </form>
                        </main>
                      </div>
                    </div>
                  </div>




            <!-- INICIO RODA PÉ-->
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

</html>
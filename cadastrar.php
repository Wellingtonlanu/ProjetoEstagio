<?php
include('conexao.php');



//Se for um post e o array for maior que zero
if(isset($_POST) && count($_POST) > 0){
//var_dump($_POST); die;



    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];

    $endereco=$_POST['endereco'];
    $bairro=$_POST['bairro'];
    $cep=$_POST['cep'];
    $uf=$_POST['uf'];
    
    //Cadastrar Associado
    $salvar_associados = 'INSERT INTO associados ( nome, email, telefone, status)
    VALUES ( "'.$nome.'","'.$email.'", '.$telefone.', 1)';
    $con_salvar = $conn->query($salvar_associados) or die($conn->error);
    



    // Seleciona e cadastra juntamente com o último ID adicionado 
    $recuperaID = 'SELECT LAST_INSERT_ID() as id_associado';
    $con_ultimo_id = $conn->query($recuperaID) or die($conn->error);
    $con_ultimo_id_array = $con_ultimo_id->fetch_array();
   




    //Cadastrar endereço do associado 
    $salvar_endereco = 'INSERT INTO enderecos (endereco, bairro, cep, uf, id_associado)
    VALUES ( "'.$endereco.'","'.$bairro.'", '.$cep.', "'.$uf.'", '.$con_ultimo_id_array['id_associado'].');';  
    $con_salvar_end = $conn->query($salvar_endereco) or die($conn->error);  
    mysqli_close($conn);
    }

?>







<!DOCTYPE html>
<html lang="br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                
                <div class="sidebar-brand-text mx-3">Mútua</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Início -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <span>Início</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <span>Associado</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="listar.php">Listar</a>
                        <a class="collapse-item cadastrar active" href="cadastrar.php">Cadastrar</a>
                        <a class="collapse-item" href="demitido.php">Associados Demitidos</a>

                    </div>
                </div>
            </li>


 <!-- Nav Item - Utilities Collapse Menu -->
 <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Anuidades</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="parcela.php">Parcelas</a>
                        <a class="collapse-item" href="parcelas_em_aberto.php">Parcelas em Aberto</a>
                       
                    </div>
                </div>
            </li>


               

            <!-- Divider -->
            <hr class="sidebar-divider">

        

        
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

    

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>


                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        
                        <form method="POST" action="cadastrar.php">


                        <h1 class="h4 text-gray-900 mb-4">Cadastro de Associados</h1>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="nome" name="nome" required
                                    placeholder="Digite seu nome">
                            </div>
                            <div class="col-sm-6">
                                <input type="int" class="form-control form-control-user" name="telefone" required id="telefone"
                                    placeholder="Telefone">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" required id="email"
                                placeholder="Email Address">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="endereco" required
                                id="endereco" placeholder="Endereço">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="bairro" required
                                id="bairro" placeholder="Bairro">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="int" class="form-control form-control-user" name="cep" required id="cep" name="cep"
                                    placeholder="CEP">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="uf" name="uf" required
                                    placeholder="UF">
                            </div>
                        </div>


                        
                        <input type="submit" value="Enviar" class="btn btn-primary btn-user btn-block"/>
                        <p></p>
                        <input type="reset" value="Limpar" class="btn btn-primary btn-user btn-block"/>
                        <p></p>
                        <a  class="btn btn-primary btn-user btn-block" href="index.php">Voltar </a>
                            
                </div>
            </div>
                                    
                                    
       
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
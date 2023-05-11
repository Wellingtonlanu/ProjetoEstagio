<?php
include('conexao.php');

// Consulta somente da tabela anuidade
$consulta_anuidade = "SELECT * FROM associados AS a 
LEFT JOIN anuidade AS e ON e.id_associado = a.id_associado
WHERE a.id_associado AND e.status_anuidade= 0";

$con_anuidade = $conn->query($consulta_anuidade) or die($conn->error);
?>





<!DOCTYPE html>
<html lang="br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projeto Mutua</title>

    <form method="POST" action="editar.php">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                <a class="collapse-item" href="cadastrar.php">Cadastrar</a>
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
                <a class="collapse-item " href="parcela.php">Parcelas</a>
                <a class="collapse-item active" href="parcelas_em_aberto.php">Parcelas em Aberto</a>
               
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    
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

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Ano</th>
                                            <th>Valor</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Ação</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    
                                        <tbody>
                                            <?php while($dado = $con_anuidade->fetch_array()) { ?>    
                                                    <tr>
                                                        <td><?php echo $dado['nome']; ?></td>
                                                        <td><?php echo $dado['ano']; ?></td>
                                                        <td><?php echo $dado['valor']; ?></td>
                                                        <td><?php echo $dado['nome']; ?></td>
                                                        <td><?php echo $dado['ano']; ?></td>
                                                        <td><?php echo $dado['valor']; ?></td>
                                                        <td>
                                                            <form name="editWish" action="editar_parcelas_em_aberto.php" method="POST">    
                                                                <input type="hidden" name="id_anuidade" value="<?php echo $dado['id_anuidade']; ?>">
                                                                <input type="submit" style="width: 66px ;height: 30px;" value="Editar" class="btn btn-primary btn-user btn-block"/>
                                                            </form>
                                                        </td>
                                                        
                                                    </tr> 
                                            <?php } ?>
                                        </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>




















<!--<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
<thead>
<tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 176px;">Nome</th>
<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 269px;">Email</th>
<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 126px;">Telefone</th>
<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 10px;">ID-Associado</th>
<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" aria-label="Office: activate to sort column ascending" style="width: 10px;">Ação</th>
</thead>
<tfoot>
<,?php while($dado = $con_associados->fetch_array()) { ?>    

           
<tr>
<td><,php echo $dado['nome']; ?></td>
<td><,?php echo $dado['email']; ?></td>
<td><,?php echo $dado['telefone']; ?></td>
<td><,?php echo $dado['id_associado']; ?></td>
<td> 

<form name="editWish" action="editar.php" method="POST">    
<input type="hidden" name="id_associado" value="<,?php echo $dado['id_associado']; ?>">
<input type="submit" style="width: 66px ;height: 30px;" value="Editar" class="btn btn-primary btn-user btn-block"/>
</form>
</td>
<td>   
<form name="editWish" action="excluir.php" method="POST">       
<input type="hidden" name="id_associado" value="<,?php echo $dado['id_associado']; ?>">
<input type="submit" style="width: 66px ;height: 30px;;"  name="excluir_associado" value="Excluir" class="btn btn-danger btn-user btn-block"/>

</form>

</td>         
</tr> 
<,?php } ?>
</tfoot>-->












                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
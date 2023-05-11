<?php
include('conexao.php');

//Se for um post e o array for maior que zero
if(isset($_POST) && count($_POST) > 0){
//var_dump( $_POST); die;

    $ano=$_POST['ano'];
    $valor=$_POST['valor'];
    $id_anuidade=$_POST['id_anuidade'];
    $status_anuidade=$_POST['status_anuidade'];
    //var_dump( $_POST); die;


   
}

//Query para editar as anuidades em aberto
$editar_anuidade_em_aberto = "UPDATE anuidade set ano = ".$ano.", valor = ".$valor.", status_anuidade = ".$status_anuidade." WHERE id_anuidade =".$id_anuidade;
$con_atualizar_anuidade = $conn->query($editar_anuidade_em_aberto) or die($conn->error);





header("Location: parcelas_em_aberto.php");

die();

?>
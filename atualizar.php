<?php
include('conexao.php');

//Se for um post e o array for maior que zero
if(isset($_POST) && count($_POST) > 0){
//var_dump( $_POST); die;

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $id_associado=$_POST['id_associado'];
  

    $endereco=$_POST['endereco'];
    $bairro=$_POST['bairro'];
    $cep=$_POST['cep'];
    $uf=$_POST['uf'];

 if(array_key_exists('status', $_POST)){
    $status=$_POST['status'];
   //var_dump($status); die;
 }   

 

}

//Query para editar os associados
$editar_associado = "UPDATE associados set nome='".$nome."',email='".$email."', telefone=".$telefone." WHERE id_associado =".$id_associado;
$con_atualizar = $conn->query($editar_associado) or die($conn->error);




//Query para editar o endereço dos associados
$editar_endereco_associado = "UPDATE enderecos set endereco='".$endereco."',bairro='".$bairro."', cep=".$cep.", uf='".$uf."' WHERE id_associado =".$id_associado;
//var_dump($editar_end_associado);
$con_atualizar_end = $conn->query($editar_endereco_associado) or die($conn->error);




header("Location: listar.php");

die();

?>
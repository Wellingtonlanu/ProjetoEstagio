<?php
include('conexao.php');

//Se for um post e o array for maior que zero
if(isset($_POST) && count($_POST) > 0){
//var_dump( $_POST); die;

 if(array_key_exists('status', $_POST)){
    $status=$_POST['status'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $id_associado=$_POST['id_associado'];
    $status=$_POST['status'];

    $endereco=$_POST['endereco'];
    $bairro=$_POST['bairro'];
    $cep=$_POST['cep'];
    $uf=$_POST['uf'];
 
   // var_dump($status); die;
 }   

 

}

//Query para editar os associados
$editar_associado = "UPDATE associados set nome='".$nome."',email='".$email."', telefone=".$telefone.", status= ".$status." WHERE id_associado =".$id_associado;
//var_dump($editar_associado); die();
$con_atualizar = $conn->query($editar_associado);

if (!$con_atualizar) {
  die("Erro ao atualizar associado: " . $conn->error);
}
//var_dump($id_associado); die;

$editar_end_associado = "UPDATE enderecos set endereco='".$endereco."',bairro='".$bairro."', cep=".$cep.", uf='".$uf."' WHERE id_associado =".$id_associado;
//var_dump($editar_end_associado); die;
$con_atualizar_end = $conn->query($editar_end_associado) or die($conn->error);




header("Location: listar.php");

die();

?>
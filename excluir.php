<?php
include('conexao.php');


  $id_associado= $_POST['id_associado'];


  $excluir_associado="UPDATE associados SET status = 0 WHERE id_associado = $id_associado";
  $result = $conn->query($excluir_associado) or die($conn->error);



   echo "Dados excluidos com sucesso.";



?>


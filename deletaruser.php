
<?php 
include 'conecta.php';

$id = $_POST['id'];


$sql = mysql_query("DELETE from clientes WHERE id = '$id' ");

header("location:excluiruser.php");

 ?>


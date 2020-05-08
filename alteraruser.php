<?php //alteraruser.php
include 'conecta.php';

$id = $_POST['id'];
$tipo = $_POST['tipo'];

$sql = mysql_query("UPDATE clientes set tipo = '$tipo' WHERE id = '$id' ");

header("location:listaruser.php");

 ?>
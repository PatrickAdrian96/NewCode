
<?php 
include 'conecta.php';

$numero = $_POST['numero'];


$sql = mysql_query("DELETE from recados WHERE numero = '$numero' ");

header("location:sobre_adm.php");

 ?>


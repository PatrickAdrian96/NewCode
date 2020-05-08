<?php
include 'conecta.php';

$titulo = $_POST['titulo'];
$arquivo = $_FILES['arquivo']['name'];


$dir = "C:\htdocs\php5\fotos/produto";

$destino = 'C:/htdocs/php5/fotos/produto' . $_FILES['arquivo']['name'];
 
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 
move_uploaded_file( $arquivo_tmp, $destino  );	

$sql="insert into produtos (titulo, arquivo) values 
                ('$titulo', '$arquivo')";
$r = mysql_query($sql) or die ("erro 3");
	




 header('location:sobre_adm.php');

?>
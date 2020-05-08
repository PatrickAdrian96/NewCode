<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
//conecta bd
$host = "localhost";
$user = "root";
$pass = "";
$db = "loginsenha";

$conecta = mysqli_connect ($host, $user, $pass)
or die ("Não foi possivel conectar ao Banco de dados");

mysqli_select_db($db)
or die ("Não foi possivel selecionar o banco de dados");
?>
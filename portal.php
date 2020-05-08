<?php  //portal.php
 session_start();
 if(!isset($_SESSION['login']) && (!isset($_SESSION['senha']))){
 	header('location:login.html');
 }
else{
}

include('conecta.php');

$sql = mysql_query("SELECT tipo FROM clientes WHERE login = '".$_SESSION['login']."'");

$dado = mysql_fetch_assoc($sql);

if ($dado['tipo']=='admin'){
	include 'sobre_adm.php';
}
else{
	include 'sobre_cli.php';

} 
 ?>
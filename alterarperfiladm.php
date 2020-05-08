<?php  //alterarperfil.php
session_start();
session_name('secret');
if($_SESSION['validacao']==1){
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Alterando Perfil</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="sobre_adm.php">Pagina Inicial</a></li>
					    <li><a href="perfiladm.php">Meu Perfil</a></li>
				        <li><a href="excluiruser.php">Deletar Usuarios</a></li>
				        <li><a href="listaruser.php">Alterar Usuarios</a></li>
				        <li><a href="excluiradm.php">Excluir Conta</a></li>
				        <li><a href="sair.php">Sair</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="">Alterando Perfil</a></h1>
					<span class="tag">Alterar</span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
			
		
				<ul>
		
			<center><h1>Digite os dados que você queira alterar: </h1></center>
			
			
			<form id="form1" method='post' action='alterarperfiladm.php'> 
			
			
			<li>
			Senha:<label for="senha"></label>
			<input type="password" id="senha" required
			name="senha" placeholder="Digite sua nova senha">
			</li>
		

			
				<input type="submit" id="cadastrar" value="Alterar">
		
					</form>	
				
						<?php //alterardados.php
				include('conecta.php');


				$senha = $_POST['senha'];
				
				$sql = mysql_query("UPDATE clientes set senha = '$senha' WHERE login = '".$_SESSION['login']."'");
                    
                
				 ?>

			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;&rdquo;As vezes é importante parar de sonhar, e acordar. - Larry Page </blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Redes Sociais</h2>
						<span class="byline">Facemash com suas parceiras abaixos</span>
					</header>
					<ul class="contact">
						<li><a href="https://twitter.com/?lang=pt-br" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="http://facebook.com.br/" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="https://dribbble.com/" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="https://www.tumblr.com/login?language=pt_BR" class="fa fa-tumblr"><span>Tumblr</span></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
					Tester: <a>Patrick Adrian</a>(<a>CC0</a>) Turma:<a>T3-IT1</a> 
			</div>
		</div>


	</body>
</html>
<?php
}else{
echo "acesso negado, entre em sua conta";
echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=login.html'>";
}
?>

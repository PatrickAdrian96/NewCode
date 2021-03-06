<?php 
session_start();
session_name('secret');
if($_SESSION['validacao']==1){
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Excluir Conta</title>
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
						<li><a href="sobre_cli.php">Pagina Inicial</a></li>
					    <li><a href="perfil.php">Meu Perfil</a></li>	
					    <li><a href="#">Excluir Conta</a></li>
					    <li><a href="sair.php">Sair</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="">Exclua sua Conta</a></h1>
					<span class="tag">Ficamos triste com sua decisão</span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
					<header>
						<h2>Tem certeza que deseja fazer isso?</h2>
						<center><span class="byline">Pense bem antes de qualquer coisa.</span></center>
					</header>
					<form id="form1" action="deletar.php" method="post">
    				<input type='submit' name="button" id="button" value='Sim deletar' />
    				</form>
    				
    				<form id="form1" action="sobre_cli.php" method="post">
    				<input type='submit' name="button" id="button" value='Não, voltar a pagina inicial' />
                    </form>


						
				</section>
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
						<span class="byline">Aguardamos sua volta ao facemash</span>
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
				Design: <a>Patrick Adrian & Leonardo Dutra</a>(<a>CC0</a>) Turma:<a>T3-IT1</a> 
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
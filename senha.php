
<!DOCTYPE HTML>

<html>
	<head>
		<title>Facemash</title>
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
						<li><a href="index.html">Cadastra</a></li>
						<li class="active"><a href="login.html">Login</a></li>
					
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a>Facemash</a></h1>
					<span class="tag">Se divirta</span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Sidebar -->
					
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Problemas para acessar?</h2>
								<span class="byline">Cadastre - se clicando abaixo</span>
							</header>
							<p>
								<!-- Dados do php senha -->
								
<?php // senha.php
$login =$_POST['login'];
$senha=$_POST['senha'];
$con = mysqli_connect("localhost","root","") or die ("erro ao conectar");
mysqli_select_db("loginsenha") or die ("erro");
$consulta="select login, senha from clientes where login='$login' and senha='$senha'";
$r = mysqli_query($consulta) or die ("Erro na consulta do usuario");

if(mysqli_num_rows($r)==1){
session_start();
session_name('secret');
$_SESSION['validacao']=1;
$_SESSION['login']=$login;
header("Location: portal.php");
}else{
    echo "Conexão em manutenção temporariamente.<br> 
            Tente novamente mais tarde<br>";
}

?>
Ainda nao é cadastrado? <a href="index.html"> Clique aqui </a>							
								
								<!-- Dados do php senha -->
								
			</div>	
			
		</ul>
		</form>


								<!-- Termina dados do login -->
							</p>
						</section>
					</div>

				</div>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;Todo mundo tem cliente. Só traficante e analista de sistemas é que tem usuário.&rdquo;</blockquote>
				<blockquote>&ldquo;Bill Gates&rdquo;</blockquote>
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
						<span class="byline">Conecte-se a outras redes sociais</span>
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
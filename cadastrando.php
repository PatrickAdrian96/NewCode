

<!DOCTYPE HTML>
	<head>
		<title>Facemash Page Inicial</title>
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
			<link rel="stylesheet" href="css/style.css"zx lçlç~çç ;;; />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

	<!-- abre Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
					<li><a href="login.html">Logar</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a>Facemash</a></h1>
					<span class="tag">Parabens pelo seu cadastro</span>
				</div>
			</div>
		</div>
	<!-- fecha Header -->  

	<!-- abre Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- abre Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								
								<!--- Parte do PHP ---->
								
<?php
$nome = $_POST['nome'];
$login= $_POST['login'];
$senha= $_POST['senha'];
$fone= $_POST['fone'];
$email=$_POST['email'];
$cf= $_POST['cf'];
$foto = $_FILES['foto']['name'];
$dir = "C:\htdocs\php5\fotos";
if($senha != $cf){
echo "senhas nao conferem";
}else{
		
	$destino = 'C:/htdocs/php5/fotos/' . $_FILES['foto']['name'];
 
$arquivo_tmp = $_FILES['foto']['tmp_name'];
 
move_uploaded_file( $arquivo_tmp, $destino  );	



$con = mysqli_connect("localhost", "root", "") or die ("erro ao conectar");
		mysqli_select_db("loginsenha") or die ("erro");
$incluir="insert into clientes (nome, login, senha, fone, email, tipo, foto) values ('$nome','$login','$senha','$fone','$email', 'user','$foto')";
$r = mysqli_query($incluir) or die("erro ao incluir ");
     


}
?>
								
								
								
								<!--- Parte do PHP ---->
								
								<h2>Cadastro com informações salva</h2>
								<span class="byline">Entre na sua conta</span>
							</header>
							<p>
								<h1> Cadastro realizado com sucesso </h1>
								Para acessar a sua area <a href="login.html"> Clique aqui </a>
							</p>
						</section>
					</div>

					



				<div class="row">
					<section class="6u">
						
						<header>
							<!-- Aqui informações para a lateral -->
							
	
								</div>
							
	</form>
					
				</div>
			</div>
		</div>
	<!-- fecha /Main -->

	<!-- abre Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;Todo mundo tem cliente. Só traficante e analista de sistemas é que tem usuário.&rdquo;</blockquote>
					<blockquote>&ldquo;Bill Gates&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- fecha /Tweet -->

	<!--  abre Footer -->
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
	<!-- fecha /Footer -->

	<!--Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a>Patrick Adrian & Leonardo Dutra</a>(<a>CC0</a>) Turma:<a>T3-IT1</a> 
			</div>
		</div>


	</body>
</html>
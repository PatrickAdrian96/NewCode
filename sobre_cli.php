<?php 
session_start();
session_name('secret');
if($_SESSION['validacao']==1){
?>
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
			<link rel="stylesheet" href="css/style.css" />
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
				<li><a href="perfil.php">Meu Perfil</a></li>
				<li><a href="excluir.php">Excluir Conta</a></li>				
				<li><a href="sair.php">Sair</a></li>				
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a>Facemash</a></h1>
					<span class="tag">Inicio do seu vicio</span>
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
								<h2><p align="center">
                   <?php
                    echo "Bem vindo ".$_SESSION['login']." a sua pagina!";
                         ?>
                         </p></h2>
								
								<span class="byline">Divirta-se</span>
							</header>
										<!-- Dados do recado -->
										
<form id="form1" action="envia_recado.php" method="post">

  <?php 
	include 'conecta.php';
	$sql = mysql_query("SELECT * FROM clientes WHERE login = '".$_SESSION['login']."'");
    while($listar = mysql_fetch_assoc($sql)){
	echo $listar['nome'];
	}
	 ?>
  
   deixe sua opinião ou recado:<br> 
   <label for="senha"></label>
    <textarea name="comentario" rows="5" cols="60" wrap="virtual" required></textarea>
<p><input type="submit" value="Enviar"> 
        <input type="reset" value="Limpar"></p>
			
		</form>


								<!-- Termina dados do recado -->
						
						</section>
					</div>

					<!-- abre Sidebar -->
				-	<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Publicidade</h2>
							</header>
							<div class="row">
								<?php 

					include 'conecta.php';


					$sql = mysql_query("SELECT * FROM produtos ORDER BY desc ");
					while($listar = mysql_fetch_assoc($sql)){
						
						
						echo "<img width='300px'src='fotos/produto".$listar['foto']."'><br>";
				       
                      	 //echo "<img src='$listar[$foto];>'";
                       	// echo "<img src=imagens/.$listar['foto'].'">;
                        

                      
					}

					 ?><br>

						<section>
							<header>
								<h2>Noticias do dia</h2>
							</header>
							<div class="row">
								<section class="6u">
									<ul class="default">
										<li><a href="http://www.globo.com/">Globo.com</a></li>
										<li><a href="http://diariogaucho.clicrbs.com.br/rs/">Diário Gaucho</a></li>
										
								</section>
								<section class="6u">
									<ul class="default">
										<li><a href="http://zh.clicrbs.com.br/rs/esportes/">Esportes</a></li>
										<li><a href="http://www.climatempo.com.br/">Previsão do Tempo</a></li>
										
									</ul>
								</section>
							</div>
						</section>
						<section>
							<header>
								<h2>Noticias de moda</h2>
							</header>
							<ul class="style">
								<li>
									<p class="posted">Maio 21, 2016 </p>
									<p>Para você que quer melhorar o seu look.</p>
										<p><a href="http://www.modait.com.br/">Clique Aqui</a>
								</li>
								<li>
									<p class="posted">Março 16, 2016</p>
									<p>Fique por dentro das últimas novidades dos famosos, tendências de beleza e moda.</p>
									<p><a href="revistaglamour.globo.com">Clique Aqui</a></p>
								</li>
							</ul>
						</section>
							</div>
						</section>
						<section>
							<header>
								<h2>Noticias e Anúncios</h2>
							</header>
							<ul class="style">
								<li>
								    <img src="images/adorocinema.png" alt""><br>
									<br><br>
									<p>As últimas notícias do cinema, trailers e entrevistas, horários de filmes, o mais completo site de informações sobre cinema.</p>
									<p><a href="www.adorocinema.com/">Clique aqui</a></p>
								</li>
								</ul>
						</section>
        


				<div class="row">
					<section class="6u">
						<a class="image full"><br><br><img src="images/pic03.jpg" alt=""></a>
						<br><br><br><br><header>
							 <h2> Viage com a Cvc</h2>
						</header>
						<p>Os Melhores Preços em Viagens. Não Perca as Ofertas Imperdíveis!</p>
							<p>O Menor Preço em Hotéis · CVC®
								Em até 10x Sem Juros</p>
					<a href="https://www.cvc.com.br/"><p>Faça sua reseva</p></a>		
					</section>				
					<section class="6u">
						<a class="image full"><img src="images/pic04.jpg" alt="">
						<header>
						<h2>Compre Carne Friboi</h2> </a>
						</header>
						<p>Friboi a melhor marca do brasil.
							Carne confiavel tem nome.</p>
								<a href="https://www.friboi.com.br/fabrica/"><p>Faça sua experiencia</p></a>
				    
				    								
							
	
								</div>
					
				</div>
			</div>
		</div>
		
		
							
	<!-- fecha /Main -->

	<!-- abre Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo; A vida é feita de pessoas conectadas.  &rdquo;</blockquote>
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

					<?php 
include ("conecta.php");
//busca a ultima visita no banco de dados
$consulta = "SELECT visitas FROM contador";
			
$resultado = mysql_query ($consulta)
or die ("Falha na consulta");

$linha = mysql_fetch_assoc($resultado);
$visita = $linha["visitas"]; // Uma variavel recebe o valor da ultima visita
$res = $visita + '1';//outra variavel recebe o valor da ultima visita e adiciona + 1

//insere o novo valor da visita no banco de dados
$insere = "UPDATE contador SET visitas = $res WHERE visitas = '$visita'";
			
$resul_insere = mysql_query($insere)
or die ("Falha na inserção");

//Imprime o número de visitantes
echo "<br><b><br>Usuario n&ordm;: $res</b>";
?>
			</div>
		</div>


	</body>
</html>
<?php
}else{
echo "acesso negado, entre em sua conta";
echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=login.html'>";
}
?>
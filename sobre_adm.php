<?php 
session_start();
session_name('secret');
if($_SESSION['validacao']==1){
?>
<!DOCTYPE HTML>
	<head>
		<title>Facemash Administrador</title>
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
					<h1><a>Facemash</a></h1>
					<span class="tag">Monitoramento do site</span>
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
                    echo "Bem vindo administrador ".$_SESSION['login']." !";
                         ?>
                         </p></h2>
								
								<span class="byline">Recados deixados para você ao lado </span>
							</header>
										<!-- Dados do Home adm -->
							<span class="byline">			
				   				<ul>
										<li>
                                        
                                        <form method='post'  Action='deletarrecado.php'>	

						<p>Digite numero para deletar:</p>
						<input type='number' name='numero' placeholder='Digite o numero' required>
						 
						<input type='submit' value='Deletar recado'> 
					</form><br><br><br>
										    
										      <?php

					$con = mysqli_connect("localhost", "root", "") or die ("erro ao conectar");
		              mysqli_select_db("loginsenha") or die ("erro");

                    $consulta = "select numero, login, comentario from recados order by numero desc";
                    $r = mysqli_query($consulta) or die("erro");
                    while ($linha=mysqli_fetch_assoc($r)){
                   
                    echo "Número:" .$numero = $linha['numero']."<br>";    
                    echo "O Usuario:" .$login = $linha['login']."<br>";
                    echo "Comentou:" .$comentario = $linha['comentario']."<br>"."<br>";
                    }
                            ?>	
										    
										</li>
                   
                                        </ul>

								<!-- Termina dados do home adm -->
						
						</section>
					</div><br><br>

					<!-- abre Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Ofertas do dia</h2>
							</header>
							<div class="row">
								<section class="6u">
									<ul class="default">
										
										<!-- Colocando Formulario -->
										<form action="inserirproduto.php" method="post" enctype="multipart/form-data" >
										    <label>						        
										        Titulo do produto
										    </label>
										    <input type="text" name="titulo" >
										    <label> inserir imagem </label>
										    <input type="file" name="arquivo">
										    <input type="submit" value="cadastrar produto">										    
										    
										    
										</form>
										
										
										
								</section>
								<section class="6u">
									<ul class="default">
										
										
										<!--- Digitar os campos aqui --->
										
									</ul>
								</section>
							</div>
						</section>
						<section>
							<header>
								<!-- <h2> Informações */</h2> -->
							</header>
							<ul class="style">
								
							</ul>
						</section>
							</div>
						</section>
						<section>
							<header>
								<h2>Noticias e Anúncios</h2>
							</header>
							<ul class="style">
								
								</ul>
						</section>
        


				<div class="row">
					<section class="6u">
						<a class="image full"><img src="images/pic03.jpg" alt=""></a>
						<header>
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
			
$resultado = mysqli_query ($consulta)
or die ("Falha na consulta");

$linha = mysqli_fetch_assoc($resultado);
$visita = $linha["visitas"]; // Uma variavel recebe o valor da ultima visita
$res = $visita + '1';//outra variavel recebe o valor da ultima visita e adiciona + 1

//insere o novo valor da visita no banco de dados
$insere = "UPDATE contador SET visitas = $res WHERE visitas = '$visita'";
			
$resul_insere = mysqli_query($insere)
or die ("Falha na inserção");

//Imprime o número de visitantes
echo "<br><b><br>Visitante n&ordm;: $res</b>";
?></a>
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

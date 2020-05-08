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
						<li><a href="sobre_cli.php">Pagina Inicial</a></li>
							<li><a href="perfil.php">Meu Perfil</a></li>
						<li><a href="excluir.php">Excluir Conta</a></li>
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
		
				<?php 

					include 'conecta.php';

					

					$sql = mysql_query("SELECT * FROM clientes WHERE login = '".$_SESSION['login']."'");
					while($listar = mysql_fetch_assoc($sql)){
						
					

                        echo $exibir;
					
					
					 ?>


			<center><h1>Digite os dados que você queira alterar: </h1></center>
			
			
			<form id="form1" method='post' action='alterarperfil.php'> 
			<li>
			Nome:<label for="nome"></label>
			<input type="text" id="nome"  required
			name="nome" value=<?php echo $listar['nome'];?>>
			</li>
			<li>
			Fone:<label for="fone"></label>
			<input type="number" id="senha" required
			name="fone" value=<?php echo $listar['fone'];?>>
			</li>
			<li>
			Email:<label for="email"></label>
			<input type="email" id="email" required
			name="email" value=<?php echo $listar['email'];?>>
			</li> 
			
			<li>
			Senha:<label for="senha"></label>
			<input type="password" id="senha" required
			name="senha" value=<?php echo $listar['senha'];?>>
			</li>
		

			
				<input type="submit" id="cadastrar" value="Alterar">
			<?php
				}

			 ?>
					</form>	
				
						<?php //alterardados.php
				include('conecta.php');

                
                $nome = $_POST['nome'];
              
                
				
				$sql = mysql_query("UPDATE clientes SET nome  = '$nome'
							WHERE login = '".$_SESSION['login']."'");
                    
                
				 ?>
			<!--- Alterar nome acima	 ======================================================================= -->



					<?php //alterardados.php
				

                
                $senha = $_POST['senha'];
              
                
				
				$sql = mysql_query("UPDATE clientes SET senha  = '$senha'
							WHERE login = '".$_SESSION['login']."'");
                    
                
				 ?>
				
				 <!--- Alterar senha acima -->

				 <?php //alterardados.php
				

                
                $fone = $_POST['fone'];
              
                
				
				$sql = mysql_query("UPDATE clientes SET fone  = '$fone'
							WHERE login = '".$_SESSION['login']."'");
                    
                
				 ?>
				
				 <!--- Alterar fone acima -->

				 
				 <!--- Alterar acima-->

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
<?php //alterardados.php
				include('conecta.php');


				$senha = $_POST['senha'];
				
				$sql = mysql_query("UPDATE clientes set senha = '$senha' WHERE login = '".$_SESSION['login']."'");
                    
                header('location:perfiladm.php');
				 ?>
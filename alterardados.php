<?php //alterardados.php
				include('conecta.php');

                $nome = $_POST['nome'];
                $fone =$_POST['fone'];
                $email =$_POST['email'];
                $senha = $_POST['senha'];
				
				$sql = mysql_query("UPDATE clientes SET senha = '$senha' WHERE login = '".$_SESSION['login']."'");
                    
                header('location:perfil.php');
				 ?>
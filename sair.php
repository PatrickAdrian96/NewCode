<?php // sair.php
session_start();
session_name('secret');
unset($_SESSION['validacao']);
unset($_SESSION['login']);
session_destroy();
header("Location: login.html");
?> 
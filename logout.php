<?php 
//iniciar sessão
session_start();

//destruir a sessão
session_unset();
session_destroy();

//enviar utilizador para a página de entrada
header('location: index.php');
?>

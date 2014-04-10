<?php  
	session_start();
	session_destroy();
	header("Location: login.php"); //funчуo header para redirecionar em php
?>
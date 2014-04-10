<?php  
$host="localhost";
$user="root";
$pass="";
$db="market_pecas";
$conexao=mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());
?>
<?php
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["password"])){
		header("Location: login.php");
		exit;
	}else{
		echo "<center>Encontra-se logado</center>";
	}	
	
?>

<html>
<title>Painel</title>

<body>
</br>
<center><a href=logout.php>Sair</a></center>;



</body>

</head>

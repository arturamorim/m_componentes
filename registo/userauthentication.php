
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<title>Autenticação utilizador</title>
<script type="text/javascript">
function loginsuccessfully(){
		setTimeout("window.location= 'painel.php'",3000);
}
function loginfailed(){
		setTimeout("window.location= 'login.php'",3000);

}
</script>
</head>

<body>
<?php
include('ligacao_bd.php');
$email=$_POST['email'];
$password=$_POST['password'];
$sql=mysql_query("SELECT * FROM users WHERE email = '$email' and password = '$password'") or die(mysql_error());
$row=mysql_num_rows($sql);
if($row>0){
	session_start();
	
	$_SESSION['email']=$_POST['email'];
	$_SESSION['password']=$_POST['password'];
	echo "Autenticado com sucesso";
	echo "<script>loginsuccessfully()</script>";
	}
else {
	echo"<center>Email de utilizador ou senha inválida. Aguarde 3 segundos para tentar novamente</center>";
	echo"<script>loginfailed()</script>";
}
?>
</body>

</head>

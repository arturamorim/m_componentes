<html>
<head>
<title>Efetuar registo</title>
</head>

<body>


<?php
$host="localhost";
$user="root";
$pass="";
$db="market_pecas";
$conexao=mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());
?>

<?php 
$nome=$_POST['nome'];
$morada=$_POST['morada'];
$nif=$_POST['nif'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$password=$_POST['password'];
$uploaddir='upload\\';
$file_path= $_FILES['arquivo']['tmp_name'];
$file_name= $_FILES['arquivo']['name'];
$file_size= $_FILES['arquivo']['size'];
$file_type= $_FILES['arquivo']['type'];
$uploadfile= $uploaddir. $_FILES['arquivo']['name'];

if($file_type=="txt" || $file_type=="doc" ||$file_type=="docx" || $file_type=="pdf" ){
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)){
		echo "Arquivo ".$file_name." enviado<br/>";
		echo "com o tamanho de ".$file_size. " bytes";
		echo "<br/>".$_FILES['arquivo']['name']; }
		else{echo "Arquivo não foi possível enviar.";}

	$sql = mysql_query("INSERT INTO clients(nome, morada, nif,email,telefone,password,doc) 
	VALUES ('$nome', '$morada', '$nif', '$email', '$telefone', '$password', 'C:/$file_name')");
	echo "<center><h1>$nome o seu registo foi efetuado com sucesso</h1>";
	}
	else echo "<br/>Tipo de arquivo não suportado "
?>

</body>

</html>
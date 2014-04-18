<?php
session_start();
require("..\modelo_logica\ligacao_bd.php");
	

	

$nome_login=$_POST['nome_login'];
$password=SHA1($_POST['password']);
$primeiro_nome=$_POST['primeiro_nome'];
$apelido=$_POST['apelido'];
$endereco=$_POST['endereco'];
$localidade=$_POST['localidade'];
$cod_postal1=$_POST['cod_postal1'];
$cod_postal2=$_POST['cod_postal2'];
$nif=$_POST['nif'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];

/*
$uploaddir='..\comprovativos_atividade\\';
$file_path= $_FILES['arquivo']['tmp_name'];
$file_name= $_FILES['arquivo']['name'];
$file_size= $_FILES['arquivo']['size'];
$file_type= $_FILES['arquivo']['type'];
//$uploadfile= $uploaddir. $_FILES['arquivo']['name'];

$ext=substr($file_name,-3);
$novo_nome_ficheiro=$nome_login.".".$ext;
$uploadfile= $uploaddir. $novo_nome_ficheiro;

if($ext=="txt" || $ext=="jpeg" ||$ext=="png" || $ext=="pdf" ){
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)){
		echo "Arquivo ".$file_name." enviado<br/>";
		echo "do tipo ".$file_type." enviado<br/>";
		//$ext=substr($file_name,-3);
		echo "com a extensao ".$ext." enviado<br/>";
		$infos=pathinfo($file_path);
		$extensao=$infos['extension'];
		echo "do tipo2 ".$file_path." enviado<br/>";
		echo "com o tamanho de ".$file_size. " bytes";
		echo "<br/>".$_FILES['arquivo']['name']; }
		else {echo "<br/> Arquivo não foi possível enviar.";}
		*/

	$sql = "INSERT INTO utilizadores(nome_login,password,primeiro_nome,apelido,endereco,localidade,cod_postal1,cod_postal2,nif,telefone,email,nivel_utilizador) 
	VALUES ('$nome_login', '$password', '$primeiro_nome', '$apelido', '$endereco','$localidade','$cod_postal1', '$cod_postal2','$nif','$telefone','$email', '2')";
	
	//$sql_client="INSERT INTO utilizadores(nome_login,password,primeiro_nome,apelido,endereco,localidade,codigo_postal,telefone,email,nivel_utilizador,doc_comprovativo) VALUES (
	//'".$_POST['nome_login']."',
//	'".$_POST['password']."',
	//'".$_POST['primeiro_nome']."',
	//'".$_POST['apelido']."',
//	'".$_POST['endereco']."',
//	'".$_POST['localidade']."',
//	'".$_POST['codigo_postal']."',
//	'".$_POST['telefone']."',
//	'".$_POST['email']."', '0')"; // nivel de cliente zero pois aguarda aprovação
	

	$consulta =mysql_query($sql);
	if($consulta==0){
		echo "<center><h1>Falha na inserção na bd</h1>";
	}else{
	echo "<center><h1>$primeiro_nome o seu registo foi submetido com sucesso</h1>";}
	//remeter para página de entrada
	
	
	/*
	else 
		echo "<br/>Tipo de arquivo não suportado ";
	//sleep(3);
	//header("Location: ../registo_cliente2.php");
	*/

?>
<?php
//iniciar sessão
session_start();

//ligação à base de dados
include("ligacao_bd.php");

//verifica se os campos do formulário de entrada estão preenchidos
if(!empty($_POST) AND (empty($_POST['nome_login']) OR empty($_POST['password']))){
//se os campos estiverem vazios volta à página de entrada
	header("Location:index.php");exit;
}

$username=$_POST['nome_login'];
$password=SHA1($_POST['password']);

$sql="SELECT id_utilizador, nome_login, password, nivel_utilizador FROM utilizadores WHERE nome_login='$username' AND password='$password' ";

$consulta=mysql_query($sql);

$resultado=mysql_fetch_assoc($consulta); //Retorna uma matriz associativa que corresponde a linha ou FALSE se não houverem mais linhas.

$_SESSION['id_utilizador']=$resultado['id_utilizador'];
	
$_SESSION['nome_login']=$resultado['nome_login'];

$_SESSION['nivel_utilizador']=$resultado['nivel_utilizador'];

if(mysql_num_rows($consulta)!=1){
//se nao retornar nenhum resultado volta à pagina de entrada
	header("Location: index.php"); exit;
//redirecionar conforme o nível
}elseif ($_SESSION['nivel_utilizador']==0){
	header("Location: index.php");exit;
}elseif ($_SESSION['nivel_utilizador']==1){ //utilizador registado
	header("Location: index.php");exit;
}elseif ($_SESSION['nivel_utilizador']==2) {//admin
	header("Location: administrador/menu_admin.php");exit;
}

?>


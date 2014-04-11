<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="test/html; charset=iso-8859-1" />  <!-- codificação de carateres alfabeto latino-->
	<title>Mercado Componentes</title>
	<script type="text/javascript" >

	function reset_form(){
	header("Location:registo_cliente.php");
	echo("ola");
	}
	</script>
</head>
<body>
<?php
//iniciar sessão
session_start();

//-------- Registar utilizador----
//inicializar as variaveis em vazio
	$nome_login="";  //nota em php atribuição apenas 1x o =
	$password="";
	$primeiro_nome="";
	$apelido="";
	$endereco="";
	$localidade="";
	$codigo_postal="";
	$telefone="";
	$email="";
if($_POST){
//print_r($_POST); //para testar visualmente
//$nome_login=$_POST['nome_login'];//estou a criar manualmente
	//cria automaticamente todas as variáveis
	extract($_POST);
	$erros=array(); //array para armazenar todos os erros
	$aviso="Campo de preenchimento obrigatório";
	$aviso2="Campo inválido";

	if($nome_login==""){
	$erros['nome_login']=$aviso;
	}

	if($password==""){
	$erros['password']=$aviso;
	}elseif (strlen($password)<9) {
		$erros['password']=$aviso2;
	}

	if($primeiro_nome==""){
	$erros['primeiro_nome']=$aviso;
	}
	if($apelido==""){
	$erros['apelido']=$aviso;
	}
	if($endereco==""){
	$erros['endereco']=$aviso;
	}
	if($localidade==""){
	$erros['localidade']=$aviso;
	}
	if($codigo_postal==""){
	$erros['codigo_postal']=$aviso;
	}
	if($telefone==""){
	$erros['telefone']=$aviso;
	}elseif (!is_numeric($telefone) || strlen($telefone)!=9) {
		$erros['telefone']=$aviso2;
	}
	
	$conta = "^[a-zA-Z0-9\._-]+@";
	$domino = "[a-zA-Z0-9\._-]+.";
	$extensao = "([a-zA-Z]{2,4})$";
 
	$pattern = $conta.$domino.$extensao;

 	if($email==""){
	$erros['email']=$aviso;
	}elseif (!ereg($pattern, $email)){
	$erros['email']=$aviso2;
	}

	if($erros==null){
		//Não houve erros no preenchimento do formulário
	if(isset($_REQUEST['apagar_tudo'])){
		$nome_login="";  //nota em php atribuição apenas 1x o =
		$password="";
		$primeiro_nome="";
		$apelido="";
		$endereco="";
		$localidade="";
		$codigo_postal="";
		$telefone="";
		$email="";
	}
	if(isset($_REQUEST['registar'])){

	//ligação BD
	include('ligacao_bd.php');
	$sql_client="INSERT INTO clientes(nome_login,password,primeiro_nome,apelido,endereco,localidade,codigo_postal,telefone,email,nivel_utilizador) VALUES (
	'".$_POST['nome_login']."',
	'".$_POST['password']."',
	'".$_POST['primeiro_nome']."',
	'".$_POST['apelido']."',
	'".$_POST['endereco']."',
	'".$_POST['localidade']."',
	'".$_POST['codigo_postal']."',
	'".$_POST['telefone']."',
	'".$_POST['email']."', '0')"; // nivel de cliente zero pois aguarda aprovação

	$consulta =mysql_query($sql_client);

	//remeter para página de entrada
	header("Location: index.php");}

	}
}

?>

<form id="form_registo" name="form_registo" method="POST" action="registo_cliente.php">
<table width="800" border="1" cellspacing="0" cellpadding="0" align="center">
<th colspan="2">Registo de cliente</th>
<tr>
	<td with="200"> Nome de acesso:</td>
	<td width="600"><input type="text" name="nome_login" value="<?php echo $nome_login;?>" size="20"/>
	<?php 
		if(isset($erros['nome_login'])){
			echo "<font size=2 color='red'>".$erros['nome_login']."</font>"; //atenção concatenação
			unset($erros['nome_login']);//excluir posição
		}
	?></td>
</tr>
<tr>
	<td>Palavra-passe:</td>
	<td><input type="password" name="password" value="<?php echo $password;?>" size="8" />(min 9 carateres)
	<?php 
		if(isset($erros['password'])){
			echo "<font size=2 color='red'>".$erros['password']."</font>"; //atenção concatenação
			unset($erros['password']);//excluir posição
		}
	?></td>
</tr>
<tr>
	<td>Primeiro nome:</td>
	<td><input type="text" name="primeiro_nome" value="<?php echo $primeiro_nome;?>" size="15"/>
	<?php 
		if(isset($erros['primeiro_nome'])){
			echo "<font size=2 color='red'>".$erros['primeiro_nome']."</font>"; //atenção concatenação
			unset($erros['primeiro_nome']);//excluir posição
		}
	?></td>
</tr>
<tr>
	<td>Apelido:</td>
	<td><input type="text" name="apelido" value="<?php echo $apelido;?>" size="25" />
	<?php 
		if(isset($erros['apelido'])){
			echo "<font size=2 color='red'>".$erros['apelido']."</font>"; //atenção concatenação
			unset($erros['apelido']);//excluir posição
		}
	?></td>
</tr>
<tr>
	<td>Endereço:</td>
	<td><input type="text" name="endereco" value="<?php echo $endereco;?>" size="50"/>
	<?php 
		if(isset($erros['endereco'])){
			echo "<font size=2 color='red'>".$erros['endereco']."</font>"; //atenção concatenação
			unset($erros['endereco']);//excluir posição
		}
	?></td>
</tr>
<tr>
	<td>Localidade:</td>
	<td><input type="text" name="localidade" value="<?php echo $localidade;?>" size="25"/>
	<?php 
		if(isset($erros['localidade'])){
			echo "<font size=2 color='red'>".$erros['localidade']."</font>"; //atenção concatenação
			unset($erros['localidade']);//excluir posição
		}
	?></td>
</tr>
<tr><td>Código postal:</td>
	<td><input type="text" name="codigo_postal" value="<?php echo $codigo_postal;?>" size="8"/>
	</td>
</tr>
<tr>
	<td>Telefone:</td>
	<td><input type="text" name="telefone" value="<?php echo $telefone;?>" size="9"/>
	<?php 
		if(isset($erros['telefone'])){
			echo "<font size=2 color='red'>".$erros['telefone']."</font>"; //atenção concatenação
			unset($erros['telefone']);//excluir posição
		}
	?></td>
</tr>
<tr>
	<td>Email:</td>
	<td><input type="text" name="email" value="<?php echo $email;?>" size="50"/>
		<?php 
		if(isset($erros['email'])){
			echo "<font size=2 color='red'>".$erros['email']."</font>"; //atenção concatenação
			unset($erros['email']);//excluir posição
		}
	?></td>
</tr>
<td colspan="2" align="center"><input type="submit" name="registar" id="registar" value="Registar"/>
<input type="submit" name="apagar_tudo" id="apagar_tudo" value="Apagar tudo"/>
<?php 
		if(isset($erros['nome_login'])){
			echo "<div class='error'>".$erros['nome_login']."</div>"; //atenção concatenação
			unset($erros['nome_login']);//excluir posição
		}
	?>
</td>
</table>
</form>
</body>
</html>
















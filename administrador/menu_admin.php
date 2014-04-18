<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" > <!--para reconhecer acentuação pt -->
<title>Menu Administrador</title>
<script type="text/javascript">
function loginfailed(){
		setTimeout("window.location= 'index.php'",3000);

}
</script>
</head>

<body>
<?php
//iniciar sessão
session_start();

//verificar se o utilizador está autenticado
if(!isset($_SESSION['id_utilizador'])){
echo"<tr>Não está autorizado a aceder a esta página! </tr>";
echo"<script>loginfailed()</script>";
}
//verificar nível de utilizador
if(isset($_SESSION['nivel_utilizador']))
	{$nivel= $_SESSION['nivel_utilizador'];}
?>

<table width="800 px" border="1" align="center">
<td align="center">Menu de administrador</td><br/>
<tr>
	<td><a href='adicionar_categoria.php'>Adicionar categoria</a>
	<p><a href='listar_categorias.php'>Listar categorias</a>	
	<p><a href='listar_utilizadores_por_validar.php'>Listar utilizadores por validar</a>
		<p><a href='listar_utilizadores.php'>Listar utilizadores</a>
		<p><a href='criar_administrador.php'>Criar administrador</a>
		<p><a href='listar_administradores.php'>Listar administradores</a>
	<p><a href='../logout.php'>Terminar sessão</a></td>
</tr>
</body>
</html>

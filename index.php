<?php

//iniciar sessão
session_start();

//ligação à base de dados
include('ligacao_bd.php');

?>
<html>
<head>
<title>Mercado Componentes</title>
</head>

<body background-color: #FC9804 >

<table width="800" border="1" cellspacing="0" cellpadding="0" align="center">
<tr><td width="200"></td>
<td width="600">


<?php 
//verificar se já foi feita a autenticação
if(isset($_SESSION['nivel_utilizador'])){
echo "Bem vindo, ".$_SESSION['nome_login'];
echo "|| <a href='lista_compras.php'>Ver lista de compras</a>";
echo "|| <a href='estado_encomenda.php'>Ver estado da encomenda</a>";
echo "|| <a href='logout.php'>Terminar sessão</a>";
}else{
include('login.php');}
?>

</td></tr>
<tr>
<td align="center"><Strong> Categorias de artigos</strong><td/>
<td align="center"><Strong> Artigos em Destaque</strong><td/>
</tr>
<tr>
<td width='50'><?php include('ver_categorias.php'); ?> </td>



</body>
</html>
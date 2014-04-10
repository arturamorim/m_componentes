<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<?php
//iniciar sessão
session_start();
//ligação à base de dados
include("../ligacao_bd.php");

//criar consulta à base de dados

$sql ='SELECT * from clientes ORDER BY primeiro_nome ASC';
$consulta=mysql_query($sql);

//verificar se existem resultados e construir tabela
if($consulta !=0){
	echo'<table width="600 px" border=1 align="center" cellspacing=0>';
	echo'<tr>
	<td align="center" width="50px">Nº registo</td>
	<td align="center" width="50px">Nome de acesso</td>
	<td align="center" width="100px">Email</td>';
	

	//percorrer o array e mostrar resultados
	while($mostrar=mysql_fetch_array($consulta)){
		$id_cliente=$mostrar["id_cliente"];
		$nome_login=$mostrar["nome_login"];
		$email=$mostrar["email"];
		echo"<tr>
		<td align=\"center\" width \"50px\">$id_cliente</td>
		<td align=\"center\" width \"50px\">$nome_login</td>
		<td align=\"center\" width \"50px\">$email</td>
		</tr>";}


echo "</table>";}


?>

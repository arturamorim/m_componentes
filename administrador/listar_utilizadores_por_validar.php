<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<title> Mercado de Componentes</title>
			<meta http-equiv="Content-Type" content="test/html; charset=iso-8859-1" />  <!-- codificação de carateres alfabeto latino-->
		<link rel="stylesheet" type="text/css" href="../estilo/estilo_site.css"/>
	</head>
	<body>
		<div id="topo">
			<div id="menu">
				<h3>
					Menu de Administrador
				</h3>
				<p><a href='menu_admin.php'>Voltar ao menu</a>
				<p><a href='../logout.php'>Terminar sessão</a>
				</div>

		
		<div id="conteudo">
			<h2>
				Clientes
			</h2>
		<?php
		//iniciar sessão
		session_start();
		//ligação à base de dados
		include("../ligacao_bd.php");

		//criar consulta à base de dados

		$sql ='SELECT * from utilizadores WHERE nivel_utilizador="0" ORDER BY primeiro_nome ASC';
		$consulta=mysql_query($sql);

		//verificar se existem resultados e construir tabela
		if($consulta !=0){
			echo'<table width="600 px" border=1 align="center" cellspacing=0>';
			echo'<tr>
			<td align="center" width="50px">Nº registo</td>
			<td align="center" width="50px">Nome de acesso</td>
			<td align="center" width="100px">Email</td>
			<td align="center" width="100px">validar</td>
			<td align="center" width="100px">Eliminar</td>';

			//percorrer o array e mostrar resultados
			while($mostrar=mysql_fetch_array($consulta)){
				$id_utilizador=$mostrar["id_utilizador"];
				$id_utilizador_cod=base64_encode($mostrar["id_utilizador"]);
				$nome_login=$mostrar["nome_login"];
				$email=$mostrar["email"];
				echo"<tr>
				<td align=\"center\" width \"50px\">$id_utilizador</td>
				<td align=\"center\" width \"50px\">$nome_login</td>
				<td align=\"center\" width \"50px\">$email</td>
				<td align=\"center\"><a onclick=\"return confirm('Confirma que vai validar o utilizador?')\"
				href=\"validar_utilizador.php?id_utilizador=$id_utilizador_cod\"><img src='../icones/check.png'/></a>
				<td align=\"center\"><a onclick=\"return confirm('Confirma que vai eliminar o cliente?')\"
				href=\"eliminar_utilizador.php?id_utilizador=$id_utilizador_cod\"><img src='../icones/eliminar.gif'/></a>
				</tr>";}




		echo "</table>";}
		?>

		</div>
	</body>
</html>

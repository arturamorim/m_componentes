<html>
	<head>
	<meta http-equiv="Content-Type" content="test/html; charset=iso-8859-1" /> 
	</head>

	<body>
		<table width"800 px" border="1" align="center">
		<form action="processa_registo_artigo.php" method="POST" enctype="multipart/form-data">//esta informação permite que os dados sejam reconhecidos como formato dados e não como texto
		<tr>
			<td>Nome do artigo</td>
			<td><input type="text" name="nome_prod" size=50 /></td>
		</tr>
		<tr>
			<td>Descrição do artigo</td>
			<td><input type="text" name="desc_prod" rows="10" cols="40"/></td>
		</tr>
		<tr>
			<td>Preço do artigo</td>
			<td><input type="text" name="preco_prod" size=10 /></td>
		</tr>
		<tr>
			<td>Total de unidades do artigo</td>
			<td><input type="text" name="stock_prod" size=10 /></td>
		</tr>
		<td>Categoria do artigo:
			<?php
			//ligação à bd
			include('ligacao_bd.php');
			//procurar categorias disponíveis
			$sql="SELECT * FROM categorias ORDER BY nome_categoria ASC;";
			$consulta=mysql_query($sql);
			//criar seleção de categorias
			echo'<td><select name="cat_prod">';
			while($mostrar=mysql_fetch_assoc($consulta)){
				echo"<option value=" . $mostrar['id_categoria']. "> ".$mostrar['nome_categoria']."<option>";

			}
			?>

		</table>

	</body>

</html>

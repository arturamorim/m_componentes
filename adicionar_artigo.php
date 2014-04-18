<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" > <!--para reconhecer acentuação pt -->
	</head>

	<body>
		<table width"800 px" border="1" align="center">
		<form action="processa_registo_artigo.php" method="POST" enctype="multipart/form-data"> <!--esta informação permite que os dados sejam reconhecidos como formato dados e não como texto -->
		<tr>
			<td><b>Nome do artigo</td>
			<td><input type="text" name="nome_prod" size=50 /></td>
		</tr>
		<tr>
			<td><b>Descrição do artigo</td>
			<td><input type="text" name="desc_prod" rows="10" cols="40"/></td>
		</tr>
		<tr>
			<td><b>Preço do artigo</td>
			<td><input type="text" name="preco_prod" size=10 /></td>
		</tr>
		<tr>
			<td><b>Total de unidades do artigo</td>
			<td><input type="text" name="stock_prod" size=10 /></td>
		</tr>
		<td><b>Categoria do artigo:
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
			<tr>
				<td><b>Imagem do artigo (formato .jpeg e tamanho máx. = 3Mb)</td>
				<td><input name="imagem" size="40" type=file></td>
			</tr>
			<td><input name="enviar" type="submit" value="Registar artigo" />
			<input name="reset" type="reset" value="Apagar" />
			</td>
			</form>			
		</table>

	</body>

</html>

<?php
//ligação à BD
include('ligacao_bd.php');
//procurar categorias disponiveis
$sql_cat="SELECT * FROM categorias ORDER BY nome_categoria ASC";
$consulta =mysql_query($sql_cat);
//apresentar categorias disponiveis
while($mostrar=mysql_fetch_array($consulta)){  //mysql_fetch_array --  Busca o resultado de uma linha e o coloca como uma matriz associativa, matriz numérica ou ambas.
$nome_categoria=$mostrar['nome_categoria'];
$id_categoria=$mostrar['id_categoria'];
echo "<p><a href=\"artigos_categoria.php?id_categoria\">$nome_categoria</a>";
}
?>


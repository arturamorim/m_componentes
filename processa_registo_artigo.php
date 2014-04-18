<?php
//ligação à bd
require('modelo_logica/ligacao_bd.php');
$cat_prod=$_POST["cat_prod"];
$nome_prod=$_POST["nome_prod"];
$descricao_prod=$_POST["desc_prod"];
$preco_prod=$_POST["preco_prod"];
$stock_prod=$_POST["stock_prod"];
$img_nome=$_FILES["imagem"]["name"];

//determinar tamanho e o tipo de ficheiro enviado

$img_tamanho= round($_FILES["imagem"]["size"]);  
$img_tipo=$_FILES["imagem"]["type"];
$local_final="imagens/".$img_nome;

//caso o tamanho e o tipo de ficheiro estejam corretos permite upload
if($img_tamanho <3145728 && ($img_tipo== "image/jpeg" or $img_tipo ="image/pjpeg")){  //3Mb

//copiar para o destino
(move_uploaded_file($_FILES['imagem']['tmp_name'], $local_final));

$id_utilizador=31;

//inserir hiperligação na base de dados
$sql_regista="INSERT INTO artigos (id_categoria, id_utilizador, nome_artigo, descricao_artigo, preco_artigo, stock_artigo, imagem_artigo) 
VALUES ('$cat_prod', '$id_utilizador','$nome_prod', '$descricao_prod', '$preco_prod', '$stock_prod', '$img_nome')";
//VALUES ( 1, 31,  'peras',  'pretas',  '60,0',  '20',  'imagem' )";
$consulta=mysql_query($sql_regista);

//confirmar registo do artigo
if($consulta==1){
echo "O seu artigo foi inserido com sucesso";}
else { echo "<br>O seu artigo não foi inserido";
	echo "<br>".$cat_prod;
	echo "<br>".$id_utilizador;
	echo"<br>".$nome_prod;
	echo "<br>".$descricao_prod;
	echo "<br>".$preco_prod;
	echo "<br>".$stock_prod;
	echo "<br>".$img_nome;		}
}

//caso não tenha sido feito o upload da imagem, informa sobre o erro
else{
echo"<p>Não foi possível registar os dados devido a um erro no ficheiro de imagem.";
if($img_tamanho > 3145728){
echo"<p>O ficheiro submetido tem o tamanho de ".$img_tamanho ."Kb!</br>";
}
else{
echo "<p>O ficheiro submetido é do tipo". $img_tipo . "!<br>";}

echo"<p>O ficheiro submetido não pode ultrapassar os 3Mb ou ter formato diferente de JPEG!</br>";
}
?>


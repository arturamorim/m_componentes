<?php
//inicia sess�o
session_start();
//defini��o do tipo de imagem a gerar
header("Content-type: image/png");

//gera��o de chave
$chave=rand(0,500);
// codifica��o da chave e apresenta��o de 8 carateres
$codigo=substr(sha1($chave),0,8);
$_SESSION['codigo']= $codigo;
//defini��es de imagem e cor
$imagem=imageCreateFromPNG("./imagens/captcha.png");
$cores= imageColorAllocate($imagem,255,55,0);
//centrar c�digo na figura
imageString($imagem, 5,75,20,$codigo,$cores);

//gerar imagem
imagePNG($imagem);
//destruir imagem
imagedestroy($imagem);
?>

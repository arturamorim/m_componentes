<?php
//inicia sessão
session_start();
//definição do tipo de imagem a gerar
header("Content-type: image/png");

//geração de chave
$chave=rand(0,500);
// codificação da chave e apresentação de 8 carateres
$codigo=substr(sha1($chave),0,8);
$_SESSION['codigo']= $codigo;
//definições de imagem e cor
$imagem=imageCreateFromPNG("./imagens/captcha.png");
$cores= imageColorAllocate($imagem,255,55,0);
//centrar código na figura
imageString($imagem, 5,75,20,$codigo,$cores);

//gerar imagem
imagePNG($imagem);
//destruir imagem
imagedestroy($imagem);
?>

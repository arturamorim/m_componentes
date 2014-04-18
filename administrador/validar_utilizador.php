<?php
//ligaзгo а base de dados
require('../modelo_logica/ligacao_bd.php');

//eliminar utilizador da base de dados
$sql="UPDATE utilizadores SET nivel_utilizador = 1 WHERE id_utilizador =".base64_decode($_GET['id_utilizador']);
$consulta=mysql_query($sql);

$to      = 'arturantenorformacao@gmail.com';
$subject = 'Bem-vindo ao Mercado De Componentes';
$message = 'Jб podes comeзar a comprar ou a vender no nosso site';
$headers = 'From: arturantenorformacao@gmail.com' . "\r\n" .
    'Reply-To: arturantenorformacao@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

/*

$message = "Jб podes comeзar a comprar ou a vender no nosso site";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('arturantenorformacao@gmail.com', 'Bem-vindo ao Mercado De Componentes', $message);
//voltar ao menu de administrador
-->
*/

header("Location: listar_utilizadores_por_validar.php");
exit;
?>
<?php
//ligação à base de dados
require('../modelo_logica/ligacao_bd.php');

//eliminar utilizador da base de dados
$sql="DELETE FROM utilizadores where id_utilizador =".base64_decode($_GET['id_utilizador']);
$consulta=mysql_query($sql);

//voltar ao menu de administrador
header("Location: listar_clientes.php");
exit;
?>

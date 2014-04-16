<?php
//ligaчуo р base de dados
require('../modelo_logica/ligacao_bd.php');

//eliminar utilizador da base de dados
$sql="UPDATE utilizadores SET nivel_utilizador = 1 WHERE id_utilizador =".base64_decode($_GET['id_utilizador']);
$consulta=mysql_query($sql);

//voltar ao menu de administrador
header("Location: listar_utilizadores_por_validar.php");
exit;
?>
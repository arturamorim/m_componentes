<?php
//iniciar sessão
session_start();
//verificar se o user está autenticado
if(isset($_session['id_user'])){
echo"<tr>Não está autorizado a aceder a esta página!</tr>";
echo "<tr><a href='..//index.php'>Clique para voltar à página inicial!</a></tr>";}
else{
//verificar nivel de utilizador
if(isset($_SESSION['level_user'])){ $level=$_SESSION['level_user'];}
?>

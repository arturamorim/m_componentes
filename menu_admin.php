<?php
//iniciar sess�o
session_start();
//verificar se o user est� autenticado
if(isset($_session['id_user'])){
echo"<tr>N�o est� autorizado a aceder a esta p�gina!</tr>";
echo "<tr><a href='..//index.php'>Clique para voltar � p�gina inicial!</a></tr>";}
else{
//verificar nivel de utilizador
if(isset($_SESSION['level_user'])){ $level=$_SESSION['level_user'];}
?>

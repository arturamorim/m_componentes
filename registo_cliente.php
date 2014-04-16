<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="test/html; charset=iso-8859-1" />  <!-- codificação de carateres alfabeto latino-->
	<title>Mercado Componentes</title>
	<script language="javascript" src="valida_form.js" type="text/javascript"></script> <!--chama o codigo javascript -->
</head>


<body>


<form name="signup" method="POST" action="modelo_logica\efetuar_registo.php" enctype="multipart/form-data" >
<!--<form id="form_registo" name="form_registo" method="POST" action="registo_cliente.php"> -->
<table width="800" border="1" cellspacing="0" cellpadding="0" align="center">
<th colspan="2">Registo de cliente</th>
<tr>
	<td with="200"> Nome de acesso:</td>
	<td width="600"><input type="text" name="nome_login" id="id_nome_login size="20"/>
	</td>
</tr>
<tr>
	<td>Palavra-passe:</td>
	<td><input type="password" name="password"  size="8" />(min 9 carateres)
	</td>
</tr>
<tr>
	<td>Primeiro nome:</td>
	<td><input type="text" name="primeiro_nome"  size="15"/>
	</td>
</tr>
<tr>
	<td>Apelido:</td>
	<td><input type="text" name="apelido"  size="25" />
	</td>
</tr>
<tr>
	<td>Endereço:</td>
	<td><input type="text" name="endereco"  size="50"/>
	</td>
</tr>
<tr>
	<td>Localidade:</td>
	<td><input type="text" name="localidade"  size="25"/>
</td>
</tr>
<tr>
	<td>Código postal:</td>
	<td><input type="text" name="cod_postal1"  size="4"/>-<input type="text" name="cod_postal2"  size="3"/></td>
	
</tr>
<tr>
	<td>Telefone:</td>
	<td><input type="text" name="telefone"  size="9"/>
	</td>
</tr>
<tr>
	<td>Nif:</td>
	<td><input type="text" name="nif"  size="9"/></td>
</tr>
<tr>
	<td>Email:</td>
	<td><input type="text" name="email" id=id_email size="50"/>
	
</tr>
	<tr>
	<td> <!--  102400 bytes-->
Comprovativo de Atividade:</td><td><input type=hidden name=MAX_FILE_SIZE value=102400><input type="file" name="arquivo" size="20"/><br/></td>
</tr>
<td colspan="2" align="center"><input type="submit" name="registar" id="registar" value="Registar" />
    <input type="button" value="enviar" onclick="carregar();" />
<input type="reset" name="apagar_tudo" id="apagar_tudo" value="Apagar tudo"/>
</td>
</table>
</form>
</body>
</html>
















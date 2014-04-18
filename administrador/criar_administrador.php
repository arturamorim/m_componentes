<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="test/html; charset=iso-8859-1" />  <!-- codificação de carateres alfabeto latino-->
	<title>Mercado Componentes</title>
	<script language="javascript" src="valida_form3.js" type="text/javascript"></script> <!--chama o codigo javascript -->
</head>


<body>


<form name="signup" method="POST" action="efetuar_registo_administrador.php" enctype="multipart/form-data" onsubmit="return validar();">
<!--<form id="form_registo" name="form_registo" method="POST" action="registo_cliente.php"> -->
<table width="800" border="1" cellspacing="0" cellpadding="0" align="center">
<th colspan="2">Registo de cliente</th>
<tr>
	<td with="200"> Nome de acesso:</td>
	<td width="600"><input type="text" name="nome_login" id="id_nome_login size="20"/><span id="erro_nome_login"></span>
	</td>
</tr>
<tr>
	<td>Palavra-passe:</td>
	<td><input type="password" name="password" id="id_password" size="8" />(min 9 carateres)<span id="erro_password"></span>
	</td>
</tr>
<tr>
	<td>Primeiro nome:</td>
	<td><input type="text" name="primeiro_nome" id="id_primeiro_nome"  size="15"/><span id="erro_primeiro_nome"></span>
	</td>
</tr>
<tr>
	<td>Apelido:</td>
	<td><input type="text" name="apelido"  id="id_apelido" size="25" /><span id="erro_apelido"></span>
	</td>
</tr>
<tr>
	<td>Endereço:</td>
	<td><input type="text" name="endereco" id="id_endereco"  size="50"/><span id="erro_endereco"></span>
	</td>
</tr>
<tr>
	<td>Localidade:</td>
	<td><input type="text" name="localidade" id="id_localidade" size="25"/><span id="erro_localidade"></span>
</td>
</tr>
<tr>
	<td>Código postal:</td>
	<td><input type="text" name="cod_postal1"  id="id_cod_postal1" size="4"/>-<input type="text" name="cod_postal2" id="id_cod_postal2" size="3"/><span id="erro_cod_postal"></span></td>
	
</tr>
<tr>
	<td>Telefone:</td>
	<td><input type="text" name="telefone" id="id_telefone"  size="9"/><span id="erro_telefone"></span>
	</td>
</tr>
<tr>
	<td>Nif:</td>
	<td><input type="text" name="nif" id="id_nif" size="9"/><span id="erro_nif"></span></td>
</tr>
<tr>
	<td>Email:</td>
	<td><input type="text" name="email" id="id_emai"l size="50"/><span id="erro_email"></span>
	
</tr>

<td colspan="2" align="center"><input type="submit" name="registar" id="registar" value="Registar";" />
<input type="reset" name="apagar_tudo" id="apagar_tudo" value="limpar" onclick="limpar();"/>
</td>
</table>
</form>
</body>
</html>
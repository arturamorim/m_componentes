<html>

<head>
<title>Registo</title>
</head>


<body>
<form name="signup" method="post" action="make_registration.php" enctype="multipart/form-data" >
Nome Completo: <input type="text" name="nome" /> <br/>
Morada:<input type="text" name="morada" /> <br/>
NIF:<input type="text" name="nif"/> <br/>
Email:<input type="text" name="email"/> <br/>
Telefone:<input type="text" name="telefone"/> <br/>
Password:<input type="password" name="password"/><br/>
<input type=hidden name=MAX_FILE_SIZE value=102400> <!--  102400 bytes-->
Comprovativo de Atividade:<input type=File name="arquivo" size="20"/><br/>
<input type="submit" value="Registar"/>
</body>

</html>
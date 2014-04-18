	// JavaScript Document Alessandro Ribeiro da Silva - alessandrozinco@hotmail.com - alessandrozinco2009.blogspot.com
function validar(){
  //criar variaveis e atribuir os valores

 	var nome_login = document.signup.nome_login.value; //atribui o valor do campo nome para a variavel
	var password = document.signup.password.value; 
	var primeiro_nome = document.signup.primeiro_nome.value; 
	var apelido= document.signup.apelido.value; 
	var endereco = document.signup.endereco.value; 
	var localidade = document.signup.localidade.value; 
	var cod_postal1 = document.signup.cod_postal1.value; 
	var cod_postal2 = document.signup.cod_postal2.value; 
	var telefone = document.signup.telefone.value; 
	var nif =	document.signup.nif.value; 
	var email =	document.signup.email.value;
  //nome = document.getElementById("tnome").value;
  //aqui começa a validação
  //alert("seu nome "+nome+" seu email "+email);

  if(nome_login == ""){ //verifica se o campo esta vazio, se for...
	// alert("Digite seu nome"); //... pede que digite um nome 
	 document.getElementById('erro_nome_login').innerHTML ="Digite um nome de login válido"; //segunda opção de aviso, aparece mensagem no html
	 document.getElementById('id_nome_login').focus(); // coloca o cursor no campo nome
	 return false; //retorna um valor de false para a funcao
			
  }
  if(password == ""){ //verifica se o campo esta vazio, se for...
	 alert("Digite password"); //... pede que digite uma pass
	 document.getElementById('erro_password').innerHTML ="Digite uma password válida"; //segunda opção de aviso, aparece mensagem no html
	 document.getElementById('id_password').focus(); // coloca o cursor no campo nome
	 return false; //retorna um valor de false para a funcao			
  }
	var regNome=/^[^0-9]+$/;
	if(primeiro_nome == "" || !regNome.test(primeiro_nome)){ //verifica se o campo esta vazio, se for...
	 alert("Digite o seu primeiro nome"); //... pede que digite uma pass
	 document.getElementById('erro_primeiro_nome').innerHTML ="Digite um nome válido"; //segunda opção de aviso, aparece mensagem no html
	 document.getElementById('id_primeiro_nome').focus(); // coloca o cursor no campo nome
	 return false; //retorna um valor de false para a funcao			
  }
    if(apelido == ""){ //verifica se o campo esta vazio, se for...
	 alert("Digite o seu apelido"); //... pede que digite uma pass
	 document.getElementById('erro_apelido').innerHTML ="Digite um apelido válido"; //segunda opção de aviso, aparece mensagem no html
	 document.getElementById('id_apelido').focus(); // coloca o cursor no campo nome
	 return false; //retorna um valor de false para a funcao			
  }
    if(endereco == ""){ //verifica se o campo esta vazio, se for...
	 alert("Digite o endereço"); //... pede que digite uma pass
	 document.getElementById('erro_endereco').innerHTML ="Digite um endereço válido"; //segunda opção de aviso, aparece mensagem no html
	 document.getElementById('id_endereco').focus(); // coloca o cursor no campo nome
	 return false; //retorna um valor de false para a funcao			
  }
    if(localidade == ""){ //verifica se o campo esta vazio, se for...
	 alert("Digite a localidade"); //... pede que digite uma pass
	 document.getElementById('erro_localidade').innerHTML ="Digite uma localidade"; //segunda opção de aviso, aparece mensagem no html
	 document.getElementById('id_password').focus(); // coloca o cursor no campo nome
	 return false; //retorna um valor de false para a funcao			
  }
    if(cod_postal1 == "" || cod_postal1.length!=4 || !isNaN(cod_postal1)){ //verifica se o campo esta vazio, se for...
	 //alert("Digite o primeiro campo do código postal"); //... pede que digite uma pass
	 document.getElementById('erro_cod_posta').innerHTML ="Digite um código postal válido"; //segunda opção de aviso, aparece mensagem no html
	 document.getElementById('id_cod_postal1').focus(); // coloca o cursor no campo nome
	 return false; //retorna um valor de false para a funcao			
  }
  if(cod_postal2 == "" || cod_postal2.length!=3){ //verifica se o campo esta vazio, se for...
	 alert("Digite o segundo campo do código postal"); //... pede que digite uma pass
	 document.getElementById('erro_cod_postal').innerHTML ="Digite um código postal válido"; //segunda opção de aviso, aparece mensagem no html
	 document.getElementById('id_cod_postal2').focus(); // coloca o cursor no campo nome
	 return false; //retorna um valor de false para a funcao			
  }
    if(telefone == "" || telefone.cod_postal1.length!=9){ //verifica se o campo esta vazio, se for...
	 alert("Digite o telefone"); //... pede que digite uma pass
	 document.getElementById('erro_telefone').innerHTML ="Digite um telefone válido"; //segunda opção de aviso, aparece mensagem no html
	 document.getElementById('id_telefone').focus(); // coloca o cursor no campo nome
	 return false; //retorna um valor de false para a funcao			
  }
    if(nif == "" || nif.length!=9 || !isNaN(nif)){ //verifica se o campo esta vazio, se for...
	 alert("Digite o nif"); //... pede que digite uma pass
	 document.getElementById('erro_nif').innerHTML ="Digite um nif válido"; //segunda opção de aviso, aparece mensagem no html
	 document.getElementById('id_nif').focus(); // coloca o cursor no campo nome
	 return false; //retorna um valor de false para a funcao			
  }
  if(email == ""){  //verifica se o campo esta vazio, se for...
		alert("Digite o email"); //... pede que digite um email
		document.getElementById('erro_email').innerHTML ="Digite um email válido"; //segunda opção de aviso, aparece mensagem no html
		document.getElementById('id_email').focus();// coloca o cursor no campo email
		return false;  //retorna um valor de false para a funcao
				
				}
  return true; //se os campos forem preenchidos, a função retornara um falor true


 
}
function carregar(){
	if(validar()){ //verifica se o valor da função e true, se for exibe a mensagem e carrega uma nova pagina
		alert("Registro efetuado, voltando a pagina inicial"); // ..exibe uma alert avisando que voltara a pagina inicial
		window.location ="efetuar_registo.php"; //carrega uma nova pagina						
		
	}
}	
	function limpar(){
		document.getElementById('erro_nome_login').innerHTML ="";
		document.getElementById('erro_password').innerHTML ="";
		document.getElementById('erro_primeiro_nome').innerHTML ="";
		document.getElementById('erro_apelido').innerHTML ="";
		document.getElementById('erro_endereco').innerHTML ="";
		document.getElementById('erro_cod_postal').innerHTML ="";
		document.getElementById('erro_telefone').innerHTML ="";
		document.getElementById('erro_nif').innerHTML ="";
		document.getElementById('erro_email').innerHTML ="";

		return true;
		//window.location ="sucesso.html"; //carrega uma nova pagina							
}


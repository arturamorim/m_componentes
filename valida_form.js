	// JavaScript Document Alessandro Ribeiro da Silva - alessandrozinco@hotmail.com - alessandrozinco2009.blogspot.com
function validar(){
  //criar variaveis e atribuir os valores

 	var nome_login = document.signup.nome_login.value; //atribui o valor do campo nome para a variavel
	var email =	document.signup.email.value; //atribui o valor do campo email para variavel
  
  //aqui começa a validação
  //alert("seu nome "+nome+" seu email "+email);

  if(nome_login == ""){ //verifica se o campo esta vazio, se for...
	 alert("Digite seu nome"); //... pede que digite um nome 
	 document.getElementById('erro').innerHTML ="Digite um nome valido"; //segunda opção de aviso, aparece mensagem no html
	 document.getElementById('id_nome').focus(); // coloca o cursor no campo nome
	 return false; //retorna um valor de false para a funcao
			
  }
  if(email == ""){  //verifica se o campo esta vazio, se for...
		alert("Digite um email"); //... pede que digite um email
		document.getElementById('erro').innerHTML ="Digite um email valido"; //segunda opção de aviso, aparece mensagem no html
		document.getElementById('id_email').focus();// coloca o cursor no campo email
		return false;  //retorna um valor de false para a funcao
				
				}
  return true; //se os campos forem preenchidos, a função retornara um falor true
 
}
function carregar(){
	if(validar()){ //verifica se o valor da função e true, se for exibe a mensagem e carrega uma nova pagina
		alert("Registro efetuado, voltando a pagina inicial"); // ..exibe uma alert avisando que voltara a pagina inicial
		window.location ="sucesso.html"; //carrega uma nova pagina				
		
		
	}	
}
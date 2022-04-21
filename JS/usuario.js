/*$(document).ready(function () {
    $("#btn-confirm").onclick(function () { 
        nome = $("#name").val()
        email = $("#email").val()
        pwd = $("#pwd").val()
        cpf = $("#cpf").val()
        adress = $("#adress").val()
        bairro = $("#bairro").val()
        cidade = $("#cidade").val()
        uf = $("#uf").val()
        cep = $("#cep").val()
        telefone = $("#telefone").val()
        foto = $("#foto").val()

        valorUrl = "usuarios.php"
        valFormat = {email: email, nome: nome , senha : pwd , cpf : cpf , nameAdress : adress , bairro : bairro , cidade : cidade, uf : uf , cep : cep , telefone : telefone , foto : foto }
        
        $.post(valorUrl, valFormat,
            function (response, connection) {
                if (connection == "success") {
                    valObj = Jquery.parseJSON(response);
                    
                    $("#resultado").html(
                        "Nome:" +valObj.nome + "<br>" +
                        "Email:"+valObj.email + "<br>"+
                        "Senha:"+valObj.senha + "<br>"+
                        "CPF:"+valObj.cpf + "<br>"+
                        "Endereço:"+valObj.nameAdress + "<br>"+
                        "Bairro:"+valObj.bairro + "<br>"+
                        "Cidade:"+valObj.cidade + "<br>"+
                        "UF:"+valObj.uf + "<br>"+
                        "CEP:"+valObj.email + "<br>"+
                        "Telefone"+valObj.telefone+ "<br>"+
                        "Foto"+valObj.foto
                    );
                    
                }   
            }
            
        );
    });
});


*/


$(document).on('click', "#btn-confirma", function () {
	
  // pegando os dados
        nome = $("#name").val()
        email = $("#email").val()
        pwd = $("#pwd").val()
        cpf = $("#cpf").val()
        adress = $("#adress").val()
        bairro = $("#bairro").val()
        cidade = $("#cidade").val()
        uf = $("#uf").val()
        cep = $("#cep").val()
        telefone = $("#telefone").val()
        foto = $("#foto").val()

        
	
  // criando as variáveis
  var vUrl = "usuarios.php";
  var vData = { "email": email, "nome": nome , "senha" : pwd , "cpf" : cpf , "adress" : adress , "bairro" : bairro , "cidade" : cidade, "uf" : uf , "cep" : cep , "telefone" : telefone , "foto" : foto  };
 
  $.post(
   vUrl, //variável correspondente a meu arquivo php
   vData,
   function (response,status)
   {
     // tratando o status de retorno. Sucesso significa que o envio e retorno foi executado com sucesso.
     if(status == "success")
     {
        // pegando os dados jSON
        var obj = jQuery.parseJSON(response);
 
       $("#result").html(
            "Nome:" +obj.nome + "<br>" +
            "Email:"+obj.email + "<br>"+
            "Senha:"+obj.senha + "<br>"+
            "CPF:"+obj.cpf + "<br>"+
            "Endereço:"+obj.adress + "<br>"+
            "Bairro:"+obj.bairro + "<br>"+
            "Cidade:"+obj.cidade + "<br>"+
            "UF:"+obj.uf + "<br>"+
            "CEP:"+obj.email + "<br>"+
            "Telefone"+obj.telefone+ "<br>"+
            "Foto"+obj.foto
       );
     }    	
   }
  );
});
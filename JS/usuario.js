$(document).ready(function () {
    $( "#btn-confirm").onclick(function (e) { 
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
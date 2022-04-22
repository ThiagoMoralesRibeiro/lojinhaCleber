$("#btn-confirma").on(click, function () {
    obj = JSON.stringify({
        nome : $("#name").val(),
        email : $("#email").val(),
        pwd : $("#pwd").val(),
        cpf : $("#cpf").val(),
        adress : $("#adress").val(),
        bairro : $("#bairro").val(),
        cidade : $("#cidade").val(),
        uf : $("#uf").val(),
        cep : $("#cep").val(),
        telefone : $("#telefone").val(),
        foto : $("#foto").val(),
    });

    function AddRegister(){
        $.ajax({
            type: "POST",
            url: "usuarios.php",
            data: obj,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (response) {
                if (response) {
                    //trata a resposta
                    alert("Salvo com sucesso!");
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
                        "Foto"+obj.foto );
                    

                }else{
                    alert(response.error);                    
                }
            },
            error: function(){
                alert(error.message);
            }
        });
    };
    AddRegister();
    
});



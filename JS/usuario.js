$(document).ready(function() {
    /// Quando usuário clicar em salvar será feito todos os passo abaixo
    $('#btn-confirma').click(function() {

        info = $('#userCad').serialize();
        console.log(info);

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'PHP/usuarios.php',
            async: true,
            data: info,
            success: function(response) {
                location.reload();
            }
        });

        return false;
    })
});
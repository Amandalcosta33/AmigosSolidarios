
function Acessar(){
    $.ajax({
        url: "adm/php/acessarAjudante.php",
        type: 'post',
        data: {
            email:$('#email').val(),
            senha:$('#senha').val()
        },
        success: function(retorno){
            if (retorno == 'ok'){
                window.location.href = '/AmigosSolidarios/ajudante/index.php';
            } else {
                alert('Senha ou usuário incorretos, por favor revisar.');
            }
        }
    });
}

function CriarAjudante(){
    $.ajax({
        url: "adm/php/cadastrarAjudante.php",
        type: 'post',
        data: {
            nome:$('#nomenovo').val(),
            email:$('#emailnovo').val(),
            senha:$('#senhanovo').val()
        },
        success: function(retorno){
            alert( "Conta Criada, faça login pra continuar.");
        }

    })

}

function Acessar(){
    $.ajax({
        url: "adm/php/acessarAjudante.php",
        type: 'post',
        data: {
            email:$('#email').val(),
            senha:$('#senha').val()
        },
        success: function(retorno){
            console.log(retorno);
            if (retorno == 'ok'){
                window.location.href = '/AmigosSolidarios/ajudante/index.php';
            } else {
                alert('Senha ou usuário incorretos, por favor revisar.');
            }
        }
    });
}
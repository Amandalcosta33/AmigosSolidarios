
function Acessar(){
    let usuario = $('#usuario').val();
    $.ajax({
        url: "adm/php/acessar.php",
        type: 'post',
        data: {
            usuario:$('#usuario').val(),
            senha:$('#senha').val()
        },
        success: function(retorno){
            console.log(retorno);
            if (retorno == 'ok'){
                window.location.href = '/AmigosSolidarios/adm/index.php';
            }
        }
    });
}
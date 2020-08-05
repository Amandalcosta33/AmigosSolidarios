
function CadastrarUsuario(){
    $.ajax({
        url: "cadastrar-post.php",
        type: 'post',
        data: {
            nome:$('#nome').val(),
            usuario:$('#usuario').val(),
            senha:$('#senha').val(),
            adm:$('#adm').val()
        },
        success: function(retorno){
            $('.mensagem').html(retorno).show(),
            AtualizaUsuario(),
            $('#nome').val(''),
            $('#usuario').val(''),
            $('#senha').val(''),
            $('#adm').val('')
        }
    })
}

function ExcluirUsuario(id_excluir){
    $.ajax({
        url:"excluir.php",
        type: "get",
        data:{
            id: id_excluir
        },
        success: function(retorno){
            $('.mensagem').html(retorno).show();
            AtualizaUsuario();
        }
})

}

function AtualizaUsuario(){
    $.ajax({
        url: "listar-tudo.php",
        type:'get',
        async:false,
        success:function(lista_usuario){
            $('#tabela-usuario').html(lista_usuario);
        }
    });
}
function ModoAlterarUsuario(botao){
    if($('#senha-atualizar').length > 0){
        $('#senha-atualizar').parent().next().find('.bt-alterar').hide();
        $('#senha-atualizar').parent().next().find('.bt-modo-alterar').show();
        $('#senha-atualizar').parent().html( $('#senha-atualizar').val());
        $('#adm-atualizar').parent().html( $('#adm-atualizar').val());
        
       
    }
    let senha = $(botao).parent().prev().text();
    $(botao).parent().prev().html('<input id="senha-atualizar">');

    let adm = $('#senha-atualizar').parent().prev().text();
    $('#senha-atualizar').parent().prev().html('<input id="adm-atualizar">');


    $('#senha-atualizar').val(senha);
    $('#adm-atualizar').val(adm);

    $(botao).next().show();
    $(botao).hide();
}

function AlterarUsuario(id){
    console.log($('#nome').val());
    $.ajax({
        url: 'alterar.php',
        type: 'post',
        data:{
            ID:id,
            SENHA:$('#senha-atualizar').val(),
            ADM:$('#adm-atualizar').val()
        },
        success: function(retorno){
            $('.mensagem').html(retorno).show();
            AtualizaUsuario();
        }
    });
}
 
AtualizaUsuario();
















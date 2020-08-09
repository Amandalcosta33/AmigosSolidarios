<?php
session_start();
$titulo = "usuarios";
require_once"../includesrestrito/cabecalhor.php";

if($_SESSION['ADM'] == 'S'){
    echo '<li  class="nav-item"><a class="nav-link" href="#">Usuários</a></li>';
}
?>
<style>
.botao{
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); 
    background: #f7663e;
    margin: 5px;
    margin-bottom: 20px;
    width: 210px;
    height: 100px;
    border: none;
}

 .botaousu {
   color: black;
   opacity: 0.8;
}

.botao, .botaousu:hover{
   opacity: 1;
   text-decoration: none;
}
</style>
</ul>
</div>
</nav>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="margin-top: 70px;">
    <a data-fancybox data-src="#destaque" href="javascript:;" class="pure-button pure-button-primary botaousu"><button class="botao">NOVO USUÁRIO<img style="width: 30%; margin-left: 3px;" src="/AmigosSolidarios/adm/img/iconfinder_add_user_925890.png"> </button></a>
    <div id="destaque" style="width: 600px; display: none;">
      <form class="form-inline">
        <div class="row">
            <div class="col-12" style="text-align: center;">
                <h2 style="margin-bottom: 15px;">Cadastro de novo usuário</h2>
            <input  class="form-control" placeholder="Nome" id="nome" name="nome">
            <input  class="form-control" placeholder="Usuario" id="usuario" name="usuario">
            <input  type="text" class="form-control" placeholder="Senha" id="senha" name="senha">
            <input  class="form-control" placeholder="Adm" id="adm" name="adm">
            </div>
            <div class="col-12">
            <button class=" col-6 btn btn-success" style="margin-top: 15px;" type="button" onclick="CadastrarUsuario();"><i class="fa fa-save"></i></button>
            </div>
            <div class="mensagem alert alert-success" style="display: none;"></div>
        </div>
    </form>
    </div>
        
        <div class="mensagem alert alert-success" style="display: none;"></div>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuario</th>
                    <th>Adm</th>
                    <th>Senha</th>
                </tr>
            </thead>
            <tbody id="tabela-usuario">
            </tbody>
            </table>
   
<?php
 require_once "../includesrestrito/rodaper.php"
?>
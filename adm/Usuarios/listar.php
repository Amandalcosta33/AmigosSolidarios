<?php
session_start();
$titulo = "usuarios";
require_once"../includesrestrito/cabecalhor.php";

if($_SESSION['ADM'] == 'S'){
    echo '<li  class="nav-item"><a class="nav-link" href="#">Usuários</a></li>';
}
?>
</ul>
</div>
</nav>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="margin-top: 70px;">
        <form class="form-inline">
            <div class="row">
                <div class="col-4" style="margin-left: 315px;">
                <input  class="form-control" placeholder="Nome" id="nome" name="nome">
                <input  class="form-control" placeholder="Usuario" id="usuario" name="usuario">
                <input  type="text" class="form-control" placeholder="Senha" id="senha" name="senha">
                <input  class="form-control" placeholder="Adm" id="adm" name="adm">
                </div>
                <div class="col">
                <button class=" col-2 btn btn-success" type="button" onclick="CadastrarUsuario();"><i class="fa fa-save"></i></button>
                </div>
            </div>
        </form>
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
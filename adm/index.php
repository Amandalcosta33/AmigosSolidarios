<?php
session_start();
if(!$_SESSION['ADM']){
    header("location:/AmigosSolidarios/acessorestritologin.php");  
}

require_once"includesrestrito/cabecalhor.php";
if($_SESSION['ADM'] == 'S'){
    echo '<li  class="nav-item"><a class="nav-link" href="/amigossolidarios/adm/Usuarios/listar.php">Usuários</a></li>';
}
?>
</ul>
</div>
</nav>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <?php
    require_once"php/opitions.php";
    require_once"php/indexrestrito.php";
    ?>
 

<!-- <a href="sair.php">Sair</a> -->

<?php
session_start();
if(!$_SESSION['ADM']){
    header("location:/AmigosSolidarios/acessorestritologin.php");  
}

?>
 
 
 <a href="https://www.globo.com/">GLOBO</a>

<?php
    if($_SESSION['ADM'] == 'S'){
        echo '<a href="https://www.uol.com.br/">UOL</a>';
    }
?>

<a href="sair.php">Sair</a>

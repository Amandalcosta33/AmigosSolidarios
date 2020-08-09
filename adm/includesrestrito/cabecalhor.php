<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACESSO RESTRITO</title>
    <link href="/amigossolidarios/adm/lib/jquery.fancybox.css" rel="stylesheet">
    <link href="/php/simulador/css/css/bootstrap.css " rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function SAIR(){
            window.location.href = (confirm('Deseja sair do site?'))? "/AmigosSolidarios/adm/sair.php":"";
        }
    </script>
</head>

<body>
    <header style="height: 50px;">
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand ml-5" href="/AmigosSolidarios/adm/index.php"><img src="/amigossolidarios/adm/img/icon.png" alt="logo" style="width: 30%;"></a>
            <button class="navbar-toggler position-right d-md-none collapsed" type="button" data-toggle="collapse" data-target="#menuLateral" aria-controls="menuLateral" aria-expanded="false" aria-label="Navegação mobile">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="navbar-nav px-3 d-none d-md-block">
                <li class="nav-item text-nowrap"><a href="#" onclick="SAIR();" class="nav-link"><strong>Sair</strong></a></li>
            </ul>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="menuLateral" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="margin-top: -20px;">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column mt-1" style="text-align: justify;">
                        <li class="nav-item mb-2" style=" text-align: center;"><img src="/AmigosSolidarios/adm/img/iconfinder_personal_1447.png"> </li>
                        <li class="nav-item mb-2" style="color: #09105B;"><strong style="text-transform: uppercase;">BEM-VINDO <?php echo $_SESSION['NOME'];?></strong></li>
                        <li class="nav-item"><a class="nav-link" href="#">Eventos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Fotos</a></li>
                        <li class="nav-item"><a class="nav-link"  href="#">Notícias</a></li>
                        <li  class="nav-item"><a class="nav-link"href="#">Imagens principais</a></li>


                
<?php
require_once "../classes/Usuarios.php";
$usuario = new Usuario();
$listaDeUsuario = $usuario->listarTudo();
foreach($listaDeUsuario as $linha){
    echo "<tr>";
    echo "<td>{$linha['ID']}</td>";
    echo "<td>{$linha['NOME']}</td>";
    echo "<td>{$linha['USUARIO']}</td>";
    echo "<td>{$linha['ADM']}</td>";
    echo "<td>{$linha['SENHA']}</td>";
    echo "<td>";
    echo "<button class='btn btn-danger'onclick='ExcluirUsuario( \"" . ($linha['ID']) . "\");'><i class='fa fa-trash'></i></button> ";
    echo "<button class='btn btn-primary bt-modo-alterar' onclick='ModoAlterarUsuario(this);'><i class='fa fa-pencil'></i></button> ";
    echo "<button class='btn btn-success bt-alterar' style='display:none' onclick='AlterarUsuario( \"" . ($linha['ID']) . "\");'><i class='fa fa-save'></i></button> ";
    echo "</td>";
    echo "</tr>";
}



?>
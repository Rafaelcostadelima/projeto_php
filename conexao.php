<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "sistema_produtos";
    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    // var_dump($conexao);

    // if ($conexao) {
    //     echo "Conexão realizada com sucesso! <br>";
    // } else {
    //     echo "Erro ao conectar: " . mysqli_connect_error();
    // }
?>
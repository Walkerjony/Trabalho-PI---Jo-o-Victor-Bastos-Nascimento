<?php

    $conexao = mysqli_connect("localhost", "root", "");

    if (!$conexao) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $mysql = "CREATE DATABASE cursos";

    if (mysqli_query($conexao, $mysql)) {
        echo "Banco de Dados criada com sucesso";
    } else {
        echo "Erro ao criar o Banco de Dados: " . mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>
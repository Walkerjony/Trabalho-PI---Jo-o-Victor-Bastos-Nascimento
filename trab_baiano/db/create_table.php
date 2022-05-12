<?php
    include 'conectaBanco.php';

    $mysql = "CREATE TABLE tb_usuario(
        id int(10) unsigned auto_increment primary key,
        nome varchar (50) not null,
        email varchar (100) not null,
        senha varchar (255) not null
    )";

    if (mysqli_query($conexao, $mysql)){
        echo "Tabela usuário criada com sucesso";
    }else{
        echo "Erro ao criar a tabela: ". mysqli_error($conexao);
    }

    $mysql = "CREATE TABLE tb_cursos(
        id int unsigned auto_increment primary key,
        cursos varchar (30) not null
    )";

    if (mysqli_query($conexao, $mysql)){
        echo "Tabela serviço criada com sucesso";
    }else{
        echo "Erro ao criar a tabela: ". mysqli_error($conexao);
    }

    $mysql = "CREATE TABLE tb_classes(
        id int unsigned auto_increment primary key,
        nome varchar (50) not null,
        cpf varchar (11) not null,
        telefone int (20) not null,
        id_curso int UNSIGNED,
        FOREIGN KEY (id_curso) REFERENCES tb_cursos(id)
    )";

    if (mysqli_query($conexao, $mysql)){
        echo "Tabela criada com sucesso";
    }else{
        echo "Erro ao criar a tabela: ". mysqli_error($conexao);
    }

    mysqli_close($conexao);

?>

<?php
    include '../db/connection.php';

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['phone'];
        $curso = $_POST['curso'];


        $sql = "INSERT INTO tb_classes (nome, cpf, telefone, id_curso)
        VALUES ('$nome', '$cpf', '$telefone', '$curso')";
        
        if (mysqli_query($conn, $sql)) {
            echo"<script>
                    alert('Dado adicionado com sucesso!');
                    window.location.href='../views/list.php';
                </script>";
        } else {
            echo"<script>
                    alert('Erro ao inserir o dado!');
                    window.location.href='../views/add.php';
                </script>";
        }
        mysqli_close($conn);

    }
?>
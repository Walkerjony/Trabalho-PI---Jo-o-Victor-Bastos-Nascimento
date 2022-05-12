<?php
    include '../db/connection.php';

    if(isset($_POST['nome'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['phone'];
        $curso = $_POST['curso'];

        $sql = "UPDATE tb_classes SET nome = '$nome', cpf = '$cpf', telefone = '$telefone', id_curso = '$curso'
        where id = $id";

        if (mysqli_query($conn, $sql)) {
            echo"<script>
                    alert('Dado editado com sucesso!');
                    window.location.href='../views/list.php';
                </script>";
        } else {
            echo"<script>
                    alert('Erro ao editar o dado!');
                    window.location.href='../views/list.php';
                </script>";
        }
        mysqli_close($conn);

    }
?>
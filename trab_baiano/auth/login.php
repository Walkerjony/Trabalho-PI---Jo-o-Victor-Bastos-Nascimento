<?php
include '../db/connection.php';

if (isset($_POST['nome'])) {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $pass = md5($_POST['senha']);

    $sql = "SELECT nome, senha from tb_usuario where email = '{$email}'";

    $sql_query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($sql_query);
    
    if (mysqli_num_rows($sql_query) == 1) {
        if(strcmp($pass, $row['senha']) == 0){
            session_start();
            $_SESSION['logged'] = true;
            $_SESSION['username'] = $row['nome'];
            header("Location: ../views/index.php");
        }else{
            echo "<script>
                    alert('Senha não coincide com a do banco');
                    window.location.href='../views/login.php';
                </script>";
        }
    }else{
        echo "<script>
                alert('Usuário não existe');
                window.location.href='../views/login.php';
            </script>";
    }
}
?>
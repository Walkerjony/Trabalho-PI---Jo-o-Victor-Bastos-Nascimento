<?php
include '../db/connection.php';

if (isset($_POST['nome'])) {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $pass = md5($_POST['senha']);
    $pass_c = md5($_POST['senha_confirmation']);

    if(strcmp($pass, $pass_c) != 0){
        echo "<script>
                alert('As senhas devem coincidir');
                window.location.href='../views/register.php';
            </script>";
    }else{
        $sql = "SELECT * FROM tb_usuario WHERE email = '{$email}'";

        $sql_query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($sql_query) > 0){
            echo "<script>
                    alert('Email cadastrado já existe');
                    window.location.href='../views/register.php';
                </script>";
        }else{
            $sql = "INSERT INTO tb_usuario (nome, email, senha)
                VALUES ('$name', '$email', '$pass')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>
                        alert('Cadastro realizado com sucesso!');
                        window.location.href='../views/login.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Erro ao realizar o cadastro!');
                        window.location.href='../views/login.php';
                    </script>";
            }
        }
    }
}
?>
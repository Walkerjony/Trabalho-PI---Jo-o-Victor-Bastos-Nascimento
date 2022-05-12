<?php
    include '../db/connection.php';
    if (isset($_GET['id'])) {
        $sql = "Delete FROM tb_classes WHERE id='$_GET[id]'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                    alert('Os dados foram apagados com sucesso!');
                    window.location.href='/trab_baiano/views/list.php';
                </script>";
        } else {
            echo "<script>
                    alert('Erro ao apagar os dados!');
                    window.location.href='/trab_baiano/views/list.php';
                </script>";
        }
        mysqli_close($conn);
    }
?>
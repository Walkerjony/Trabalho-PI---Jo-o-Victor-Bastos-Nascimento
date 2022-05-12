<?php

    $conn = mysqli_connect("localhost", "root", "", "cursos");

    if (!$conn) {
        die("Falha na conexão com o banco: " . mysqli_connect_error());
    }

?>
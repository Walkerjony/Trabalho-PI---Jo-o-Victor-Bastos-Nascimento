<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Listagem</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="listacuros.css" rel="stylesheet">
  <link rel="stylesheet" href="../style/List.css">
</head>

<body>
      <?php
            session_start();
            if (isset($_SESSION['logged'])) {
                echo "Bem vindo {$_SESSION['username']}!";
                echo "<br><a href='../auth/logout.php'>Logout</a>";     
            } else {
                echo "<a href='../views/login.php'>Login</a><br><br>";
            }
        ?>
                <a href="add.php"><button id="botao" type="submit" name="submit">Cadastrar uma classe</button></a>

    <div class="container">

    <br>
        <h2>Listagem das classes</h2>
        
        <table class="table">
        <thead>
                <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Telefone</th>
                <th>Cursos</th>
                <th>Editar</th>
                <th>Apagar</th>
                </tr>
        </thead>
        <tbody>
            <?php
            include '../db/connection.php';
            $sql = "SELECT a.id, a.nome, b.cursos, a.cpf, a.telefone FROM tb_classes A INNER JOIN tb_cursos B ON A.id_curso = B.id;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td> $row[nome] </td>";
            echo "<td> $row[cpf] </td>";
            echo "<td> $row[telefone] </td>";
            echo "<td> $row[cursos] </td>";
            echo "<td><a href='edit.php/?id=$row[id]'>
                    <span class='material-icons'> Editar </span>
                    </a></td>";
            echo "<td><a href='../db_actions/delete_class.php/?id=$row[id]' >
                    <span class='material-icons'> Deletar </span></td>";
            echo "</tr>";
            }
            ?>
        </tbody>
        </table>

    </div>
    </div>

</body>

</html>
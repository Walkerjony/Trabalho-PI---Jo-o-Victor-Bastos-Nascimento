<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/add.css">
">
    <title>Cadastrar</title>
</head>

<body>
    <div class="container">
        <h3>Adicionar classe</h3>
        <form method="POST" action="../db_actions/insert_class.php">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" name="cpf" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="form-group">
                <label for="curso">Cursos:</label>
                <select class="form-control" name="curso">
                    <?php
                        include '../db/connection.php';
                        $sql = "SELECT id, cursos FROM tb_cursos order by id";
                        $sql_query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($sql_query)) {
                            echo "<option value = '{$row['id']}'>".$row['cursos']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class= "botao">
                <input class='btn btn-secondary' type="reset" value="Limpar">
                <input class='btn btn-primary' type="submit" name="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>

</html>
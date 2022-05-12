<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/trab_baiano/style/Edit.css">
    <title>Cadastrar</title>
</head>
<body>
    <?php
        include '../db/connection.php';
        $id_classe = $_GET['id'];
        $sql = "SELECT * from tb_classes where id = {$_GET['id']}";

        $sql_query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($sql_query);

        $name = $row['nome'];
        $cpf = $row['cpf'];
        $phone = $row['telefone'];
        $id_course = $row['id_curso'];
    ?>
    <div class="container">
        <h3>Editar classe</h3>
        <form method="POST" action="../../db_actions/update_class.php">
            <input type="hidden" name="id" value=<?php echo $id_classe?>>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value=<?php echo $name?> required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" name="cpf" value=<?php echo $cpf?> required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" name="phone" value=<?php echo $phone?> required>
            </div>
            <div class="form-group">
                <label for="curso">Cursos:</label>
                <select class="form-control" name="curso">
                    <?php
                        $sql = "SELECT id, cursos FROM tb_cursos order by id";
                        $sql_query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($sql_query)) {
                            if($row['id'] == $id_course){
                                echo "<option selected value = '{$row['id']}'>".$row['cursos']."</option>";
                            }else{
                                echo "<option value = '{$row['id']}'>".$row['cursos']."</option>";
                            }
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
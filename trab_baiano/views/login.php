<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Login.css">
    <title>Login</title>
</head>
<body>
    <main>
        <div class="login-container">
        <div class="login-tab">
            <form method="POST" action="../auth/login.php">
                <h1>Login</h1> <br>
                <label for="nome"></label>
                <input type="text" name="nome" id="nome" placeholder="Nome">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="E-mail:"> <br>
                <label for="senha"></label>
                <input type="password" name="senha" placeholder="Senha: ">
                <input type="submit" value="Enviar">
                <p>Não é cadastrado? <a href="register.php">Registre-se!</a></p>

            </form>
        </div>
    </div>

    </main>
</body>
</html>
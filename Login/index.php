<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>

        <form action="action.php" method="post">
            <input type="text" name="username" id="name" placeholder="Usuário">
            <input type="password" name="password" id="password" placeholder="Senha">
        
        <div class="botao">
        <button type="submit">Entrar</button>
        <div class="cadastrar">
        <a href="../Cadastro">Cadastre-se</a>
        </div>
        </div>
            
        </form>
    </div>
</body>
</html>
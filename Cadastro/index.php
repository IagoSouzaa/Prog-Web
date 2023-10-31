<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Cadastro</h2>
        <form action="action.php" method="post">
            <input type="text" name="name" id="name" placeholder="Nome" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="senha" placeholder="Senha" required>
            
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
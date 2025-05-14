<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cozinha Express</title>
    <link rel="stylesheet" href="styles/styleLogin.css">
</head>
<body>
<?php include 'components/header.php'; ?>
<div class="form-container">
    <div class="logo">COZINHA EXPRESS</div>
    <h2>Login</h2>
    <div>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail">

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha">

        <button type="button">LOGAR</button>

        <div class="links">
            <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>
    </div>
</div>
</body>
</html>
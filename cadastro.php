<?php
    session_start();
    $erros = isset($_SESSION['erros']) ? $_SESSION['erros'] : [];
    unset($_SESSION['erros']); // Limpa os erros após exibir
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Cozinha Express</title>
    <link rel="stylesheet" href="styleCadastro.css">
</head>
<body>
    <div class="form-container">
        <div class="logo">COZINHA EXPRESS</div>
        <h2>Cadastro</h2>
        <?php if (!empty($erros)): ?>
            <div class="erros">
                <ul>
                    <?php foreach ($erros as $erro): ?>
                        <li><?php echo htmlspecialchars($erro); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="processarCadastro.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

            <label for="confirmar_senha">Confirmar Senha</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Digite sua senha" required>

            <label for="utilizador">Nome do utilizador</label>
            <input type="text" id="utilizador" name="utilizador" placeholder="Nome do utilizador" required>

            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <label for="genero">Género</label>
            <select id="genero" name="genero" required>
                <option value="">Selecione seu género</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="prefiro-nao-dizer">Prefiro não dizer</option>
            </select>

            <button type="submit">CADASTRAR</button>
            <div class="links">
                <p>Já tem uma conta <a href="login.php">Faça login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
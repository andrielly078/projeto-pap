<?php

// Inicia a sessão
session_start();

// Verifica se o usuário está logado (baseado na variável de sessão)
$isLoggedIn = isset($_SESSION['user']) ? true : false;

// Obtém erros da sessão, se existirem
$erros = isset($_SESSION['erros']) ? $_SESSION['erros'] : [];
unset($_SESSION['erros']); // Limpa os erros após exibir

// Dados do usuário da sessão (para pré-preencher o formulário)
$userData = $isLoggedIn ? $_SESSION['user'] : [];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozinha Express</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include 'components/header.php'; ?>
<main>
    <section class="welcome-section">
        <h1>BEM-VINDO AO COZINHA EXPRESS!</h1>
        <?php if ($isLoggedIn): ?>
            <p>Bem-vindo ao Cozinha Express, <?php echo htmlspecialchars($userData['nome']) ?>! Encontre as melhores
                receitas rápidas e fáceis para o seu dia a dia.</p>
        <?php else: ?>
            <p>Bem-vindo ao Cozinha Express, Encontre as melhores receitas rápidas e fáceis para o seu dia a dia.</p>
        <?php endif; ?>
    </section>
    <section class="recipes-grid">
        <div class="recipe-card">
            <div class="video-container">
                <iframe src="https://youtube.com/embed/PrFfgT4yNZY" allowfullscreen></iframe>
                <h3>Pastel de nata</h3>
                <div class="button">
                    <a href="pasteldenata.php" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>
        </div>
        <div class="recipe-card">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/noDZZXzImv8" allowfullscreen></iframe>
                <h3>Pão de queijo</h3>
                <div class="button">
                    <a href="paodequeijo.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>
        </div>

        <div class="recipe-card">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/MokF1BlAqpI" allowfullscreen></iframe>
                <h3>Lasanha</h3>
            </div>
            <div class="button">
                <a href="lasanha.html?id=1" class="view-recipe-btn">Ver a Receita</a>
            </div>
        </div>

        <div class="recipe-card">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/6b8mygSR51s" allowfullscreen></iframe>
                <h3>Brigadeiro</h3>
            </div>
            <div class="button">
                <a href="brigadeiro.html?id=1" class="view-recipe-btn">Ver a Receita</a>
            </div>
        </div>

        <div class="recipe-card">
            <div class="video-container">
                <iframe src=" https://www.youtube.com/embed/JJS9x54pIgQ" allowfullscreen></iframe>
            </div>
            <h3>Coxinha</h3>
            <div class="button">
                <a href="coxinha.html?id=1" class="view-recipe-btn">Ver a Receita</a>
            </div>
        </div>

        <div class="recipe-card">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/uLT2jwb3XQI" allowfullscreen></iframe>
            </div>
            <h3>Bolo Red Velvet</h3>
            <div class="button">
                <a href="bolovelvelt.html?id=1" class="view-recipe-btn">Ver a Receita</a>
            </div>
        </div>
    </section>
</main>
</body>

</html>
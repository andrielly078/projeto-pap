<?php

// Inicia a sessão
session_start();

// Verifica se o usuário está logado (baseado na variável de sessão)
$isLoggedIn = isset($_SESSION['user']) ? true : false;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozinha Express</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo">COZINHA EXPRESS</div>
        <div class="search-bar">
            <input type="text" placeholder="Digite sua pesquisa aqui">
            <i class="material-icons" style="color: black;">search</i>
        </div>
        <nav>
            <a href="#">INÍCIO</a>

            <div class="categories-menu">
                <a href="#" class="title">CATEGORIAS</a>
                <div class="categories-dropdown" id="categoriesDropdown">
                    <a href="pequeno-almoco.php">Pequeno Almoço</a>
                    <a href="almoco.php">Almoço</a>
                    <a href="sobremesas.php">Sobremesas</a>
                    <a href="lanches.php">Lanches</a>
                    <a href="jantar.php">Jantar</a>
                </div>
            </div>
            <a href="#">CONTATO</a>
        </nav>
        <div class="user-options">
            <div class="menu-icon" aria-label="Abrir menu">
                <input type="checkbox" class="menu-toggle" id="menu-toggle">
                <label for="menu-toggle" style="cursor: pointer;">
                    <i class="material-icons">menu</i>
                </label>
                <div class="dropdown-menu">
                    <?php if ($isLoggedIn): ?>
                        <a href="conta.php"><i class="material-icons">person</i><span>Conta</span></a>
                        <a href="logout.php"><i class="material-icons">logout</i><span>Sair</span></a>
                    <?php else: ?>
                        <a href="cadastro.php"><i class="material-icons">person</i><span>Login/Cadastrar</span></a>
                    <?php endif; ?>
                    <a href="#configuracoes"><i class="material-icons">settings</i><span>Configurações</span></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="welcome-section">
            <h1>BEM-VINDO AO COZINHA EXPRESS!</h1>
            <?php if ($isLoggedIn): ?>
                <p>Bem-vindo ao Cozinha Express, <?= htmlspecialchars($_SESSION['user']['nome']) ?>! Encontre as melhores
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
                        <a href="pasteldenata.html?id=1" class="view-recipe-btn">Ver a Receita</a>
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
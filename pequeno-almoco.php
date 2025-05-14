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
    <section class="recipes-grid">
            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://youtube.com/embed/J5bC17RdsNs" allowfullscreen></iframe>
                    <h3>Pão com churiço</h3>
                    <div class="button">
                        <a href="pasteldenata.php" class="view-recipe-btn">Ver a Receita</a>
                    </div>
                </div>
            </div>

             <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://youtube.com/embed/J5bC17RdsNs" allowfullscreen></iframe>
                    <h3>Pão com churiço</h3>
                    <div class="button">
                        <a href="pasteldenata.php" class="view-recipe-btn">Ver a Receita</a>
                    </div>
                </div>
            </div>
     </section>
           
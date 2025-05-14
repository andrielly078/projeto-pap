<?php
// components/header.php

// Garantir que a sessão está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifica se o usuário está logado
$isLoggedIn = isset($_SESSION['user']) ? true : false;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="styles/header.css">
    <title>Document</title>
</head>
<header>
    <div class="logo">COZINHA EXPRESS</div>
    <div class="search-bar">
        <form action="search.php" method="GET">
            <input type="text" name="query" placeholder="Digite sua pesquisa aqui">
            <button type="submit" class="search-button">
                <i class="material-icons" style="color: black;">search</i>
            </button>
        </form>
    </div>
    <nav>
        <a href="index.php">INÍCIO</a>
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
        <a href="#">CONTACTO</a>
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
</html>
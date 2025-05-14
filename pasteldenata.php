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
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
<header>
    <div class="logo">COZINHA EXPRESS</div>
    <div class="search-bar">
        <input type="text" placeholder="Digite sua pesquisa aqui">
        <i class="material-icons" style="color: black;">search</i>
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
    <section class="recipe-section">
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/PrFfgT4yNZY"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>

            <h1> Ingredientes </h1>
<ul>
        <li>500 ml de leite</li>
        <li>6 gemas de ovo</li>
        <li>200 g de açúcar</li>
        <li>60 g de farinha de trigo</li>
        <li>1 casca de limão</li>
        <li>1 pau de canela</li>
        <li>1 embalagem de massa folhada pronta</li>
    </ul>
        </div>
    </section>
</main>

<script>
    function toggleCategories(event) {
        event.preventDefault();
        const categoriesDropdown = document.getElementById('categoriesDropdown');
        categoriesDropdown.classList.toggle('active');
    }

    document.addEventListener('click', function (event) {
        const categoriesDropdown = document.getElementById('categoriesDropdown');
        const categoriesLink = document.querySelector('.categories-menu a');
        if (!categoriesDropdown.contains(event.target) && event.target !== categoriesLink) {
            categoriesDropdown.classList.remove('active');
        }
    });
</script>
</body>

</html>
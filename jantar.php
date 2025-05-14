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
                    <iframe src="https://youtube.com/embed/R3B2kNfUoyg" allowfullscreen></iframe>
                    <h3>Caldo Verde</h3>
                    <div class="button">
                        <a href="caldoverde.php" class="view-recipe-btn">Ver a Receita</a>
                    </div>
                </div>
            </div>
            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/S9r0VCwgpNg" allowfullscreen></iframe>
                    <h3>Polvo à Lagareiro</h3>
                    <div class="button">
                        <a href="polvoalagareiro.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                    </div>
                </div>
            </div>

            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/jZ2tpURWywI" allowfullscreen></iframe>
                    <h3>Leitão à Bairrada</h3>
                </div>
                <div class="button">
                    <a href="coelhoacaçada.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>

            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/sJrCuNFS-2s" allowfullscreen></iframe>
                    <h3>Carne de Panela com Batata</h3>
                </div>
                <div class="button">
                    <a href="mocadadepeixe.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>

            <div class="recipe-card">
                <div class="video-container">
                    <iframe src=" https://www.youtube.com/embed/PkwjLHqk2pk" allowfullscreen></iframe>
                </div>
                <h3>Escondidinho de Carne Seca</h3>
                <div class="button">
                    <a href="viradoapaulista.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>

            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/oA6m92Fk_zQ" allowfullscreen></iframe>
                </div>
                <h3>Galinhada</h3>
                <div class="button">
                    <a href="frangonapucara.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>

            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/39bFnkrekE" allowfullscreen></iframe>
                </div>
                <h3>Cataplana de Marisco</h3>
                <div class="button">
                    <a href="arrozdepato.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>

             <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/HBCBSrO5Ta0" allowfullscreen></iframe>
                </div>
                <h3>Bobó de Camarão</h3>
                <div class="button">
                    <a href="cuscuztemperado.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>

        </section>
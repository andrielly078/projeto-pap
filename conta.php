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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/conta.css">
    <title>Document</title>
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

<main>
    <div class="profile-container">
        <div class="profile-header">
            <div class="foto-perfil">
                <img src="assets/perfil.jpeg" alt="Foto de Perfil" class="profile-image">
            </div>
            <div class="profile-info">
                <p class="nome_utilizador"><?php echo htmlspecialchars($userData['nome']) ?></p>
                <p class="email"><?php echo htmlspecialchars($userData['email']) ?></p>
            </div>
        </div>
        <div class="profile-details">
            <div class="campos">
                <label for="nome">Nome Completo:</label>
                <div class="detail-item">
                    <span class="value"><?php echo htmlspecialchars($userData['nome']) ?></span>
                </div>
            </div>
            <div class="campos">
                <span class="label">Utilizador:</span>
                <div class="detail-item">
                    <span class="value"><?php echo htmlspecialchars($userData['utilizador']) ?></span>
                </div>
            </div>
            <div class="campos">
                <span class="label">E-mail:</span>
                <div class="detail-item">
                    <span class="value"><?php echo htmlspecialchars($userData['email']) ?></span>
                </div>
            </div>
            <div class="campos">
                <span class="label">Data de Nascimento:</span>
                <div class="detail-item">
                        <span
                                class="value"><?php echo htmlspecialchars(!empty($userData['data_nascimento']) ? (new DateTime($userData['data_nascimento']))->format('d/m/Y') : ''); ?></span>
                </div>
            </div>
            <div class="campos">
                <span class="label">Senha:</span>
                <div class="detail-item">
                    <span class="value">********</span>
                </div>
            </div>
            <div class="campos">
                <span class="label">Género:</span>
                <div class="detail-item">
                    <span class="value"><?php echo htmlspecialchars($userData['genero']) ?></span></span>
                </div>
            </div>

        </div>
        <div class="alterar-dados">
            <a href="editar-perfil.php" class="edit-button">Alterar Dados</a>
        </div>
    </div>
</main>
</body>

</html>
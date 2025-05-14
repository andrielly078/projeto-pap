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
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozinha Express</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'components/header.php'; ?>
</section>
<main>
    <section class="recipes-grid">
        <div class="recipe-card">
            <div class="video-container">
                <iframe src="https://youtube.com/embed/JJS9x54pIgQ" allowfullscreen></iframe>
                <h3>Coxinha</h3>
                <div class="button">
                    <a href="pasteldenata.php" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>
        </div>
        <div class="recipe-card">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/_vKR5jNYzVc" allowfullscreen></iframe>
                <h3>Pastel de Carne</h3>
                <div class="button">
                    <a href="arrozdoce.html?id=1" class="view-recipe-btn">Ver a Receita</a>
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
                <iframe src=" https://www.youtube.com/embed/" allowfullscreen></iframe>
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
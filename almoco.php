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
    <?php include 'components/header.php'; ?>
    <main>
        <section class="recipes-grid">
            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://youtube.com/embed/QawfgzmQHgY" allowfullscreen></iframe>
                    <h3>Feijoada</h3>
                    <div class="button">
                        <a href="feijoada.php" class="view-recipe-btn">Ver a Receita</a>
                    </div>
                </div>
            </div>
            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/f_eqc2QCifU" allowfullscreen></iframe>
                    <h3>Bacalhau a brás</h3>
                    <div class="button">
                        <a href="paodequeijo.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                    </div>
                </div>
            </div>

            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/7IXsttSejJs" allowfullscreen></iframe>
                    <h3>Coelho a caçada</h3>
                </div>
                <div class="button">
                    <a href="coelhoacaçada.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>

            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/7fzeJI96_S0" allowfullscreen></iframe>
                    <h3>Mocada de peixe</h3>
                </div>
                <div class="button">
                    <a href="mocadadepeixe.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>

            <div class="recipe-card">
                <div class="video-container">
                    <iframe src=" https://www.youtube.com/embed/-7KYIVt5Iqo" allowfullscreen></iframe>
                </div>
                <h3>Virado à Paulista</h3>
                <div class="button">
                    <a href="viradoapaulista.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>

            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/8sMJTi_3UF4" allowfullscreen></iframe>
                </div>
                <h3>Frango na Púcara </h3>
                <div class="button">
                    <a href="frangonapucara.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>

            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/4n4mFtBEcKY" allowfullscreen></iframe>
                </div>
                <h3>Arroz de pato</h3>
                <div class="button">
                    <a href="arrozdepato.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>

            <div class="recipe-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/zh0OE8YPzMM" allowfullscreen></iframe>
                </div>
                <h3>Cuscuz temperado</h3>
                <div class="button">
                    <a href="cuscuztemperado.html?id=1" class="view-recipe-btn">Ver a Receita</a>
                </div>
            </div>
        </section>
    </main>
</body>
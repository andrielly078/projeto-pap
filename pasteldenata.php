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
<?php include 'components/header.php'; ?>
<main>
    <section class="recipe-section">
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/PrFfgT4yNZY"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    class="video-embed">
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
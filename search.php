<?php
global $pdo;
session_start();
require_once 'config/database.php';

$isLoggedIn = isset($_SESSION['user']) ? true : false;
$searchQuery = isset($_GET['query']) ? trim($_GET['query']) : '';
$results = [];

if ($searchQuery) {
    try {
        $stmt = $pdo->prepare("
            SELECT * FROM receitas 
            WHERE LOWER(titulo) LIKE LOWER(:query)
            ORDER BY titulo ASC
        ");

        $searchTerm = "%{$searchQuery}%";
        $stmt->bindParam(':query', $searchTerm);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        $error = "Erro na pesquisa: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Pesquisa - Cozinha Express</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php include 'components/header.php'; ?>

<main>
    <div class="search-results">
        <h1>Resultados para: "<?php echo htmlspecialchars($searchQuery); ?>"</h1>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php elseif (empty($searchQuery)): ?>
            <p class="no-results">Digite algo para pesquisar.</p>
        <?php elseif (empty($results)): ?>
            <p class="no-results">Nenhuma receita encontrada para "<?php echo htmlspecialchars($searchQuery); ?>".</p>
        <?php else: ?>
            <div class="recipes-grid">
                <?php foreach ($results as $recipe): ?>
                    <div class="recipe-card">
                        <div class="video-container">
                            <iframe src="<?php echo htmlspecialchars($recipe['video_url']); ?>"
                                    allowfullscreen></iframe>
                            <h3><?php echo htmlspecialchars($recipe['titulo']); ?></h3>
                            <div class="button">
                                <a href="<?php echo htmlspecialchars($recipe['url_pagina']); ?>"
                                   class="view-recipe-btn">Ver a Receita</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</main>
</body>
</html>
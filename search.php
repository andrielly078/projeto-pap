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
            WHERE titulo LIKE :query 
            OR descricao LIKE :query 
            OR ingredientes LIKE :query
            ORDER BY titulo ASC
        ");

        $searchTerm = "%{$searchQuery}%";
        $stmt->bindParam(':query', $searchTerm);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Erro na pesquisa: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Pesquisa - Cozinha Express</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/search.css">
</head>
<body>
<?php include 'components/header.php'; ?>

<main>
    <div class="search-results">
        <h1>Resultados para: "<?php echo htmlspecialchars($searchQuery); ?>"</h1>

        <?php if (empty($searchQuery)): ?>
            <p class="no-results">Por favor, digite algo para pesquisar.</p>
        <?php elseif (empty($results)): ?>
            <p class="no-results">Nenhuma receita encontrada para "<?php echo htmlspecialchars($searchQuery); ?>".</p>
        <?php else: ?>
            <div class="recipes-grid">
                <?php foreach ($results as $recipe): ?>
                    <div class="recipe-card">
                        <div class="video-container">
                            <iframe src="<?php echo htmlspecialchars($recipe['video_url']); ?>"
                                    allowfullscreen></iframe>
                        </div>
                        <h3><?php echo htmlspecialchars($recipe['titulo']); ?></h3>
                        <p class="recipe-description">
                            <?php echo htmlspecialchars(substr($recipe['descricao'], 0, 100)) . '...'; ?>
                        </p>
                        <div class="button">
                            <a href="<?php echo htmlspecialchars($recipe['url_pagina']); ?>"
                               class="view-recipe-btn">Ver a Receita</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</main>
</body>
</html>
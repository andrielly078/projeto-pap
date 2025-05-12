<?php
session_start();

// Recebe os dados do formulário
$nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$senha = isset($_POST['senha']) ? trim($_POST['senha']) : '';
$confirmar_senha = isset($_POST['confirmar_senha']) ? trim($_POST['confirmar_senha']) : '';
$utilizador = isset($_POST['utilizador']) ? trim($_POST['utilizador']) : '';
$data_nascimento = isset($_POST['data_nascimento']) ? trim($_POST['data_nascimento']) : '';
$genero = isset($_POST['genero']) ? trim($_POST['genero']) : '';

// Validações
$erros = [];

if (empty($nome)) {
    $erros[] = "O nome é obrigatório.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = "O e-mail é inválido.";
}

if (empty($senha)) {
    $erros[] = "A senha é obrigatória.";
}

if ($senha !== $confirmar_senha) {
    $erros[] = "As senhas não coincidem.";
}

if (empty($utilizador)) {
    $erros[] = "O nome do utilizador é obrigatório.";
}

if (empty($data_nascimento)) {
    $erros[] = "A data de nascimento é obrigatória.";
}

if (empty($genero)) {
    $erros[] = "O gênero é obrigatório.";
}

// Se houver erros, redireciona de volta para a página de cadastro com mensagem
if (!empty($erros)) {
    $_SESSION['erros'] = $erros;
    header("Location: cadastro.php");
    exit();
}

// Se não houver erros, salva os dados na sessão
$_SESSION['user'] = [
    'nome' => $nome,
    'email' => $email,
    'senha' => password_hash($senha, PASSWORD_DEFAULT), // Criptografa a senha para segurança
    'utilizador' => $utilizador,
    'data_nascimento' => $data_nascimento,
    'genero' => $genero,
    'data_cadastro' => date('Y-m-d H:i:s')
];

// Redireciona para a página principal
header("Location: index.php");
exit();
?>
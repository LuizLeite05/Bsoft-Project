<?php
// Inicia a sessão para permitir o acesso às variáveis de sessão.
session_start();

// Verifica se a variável de sessão 'valid' está definida.
if (!isset($_SESSION['valid'])) {
    // Se 'valid' não estiver definida (ou seja, o usuário não está autenticado),
    // redireciona o usuário de volta para a página inicial (página de login).
    header('Location: ../index.php');
    // Encerra a execução do script para evitar que outro código seja executado.
    exit;
}
?>





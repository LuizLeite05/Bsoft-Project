<?php
    // Inicia a sessão, permitindo o acesso às variáveis de sessão.
    session_start();

    // Destroi a sessão, o que encerra a sessão do usuário atual.
    session_destroy();

    // Redireciona o usuário de volta para a página inicial.
    header("Location:../view/index.php");
?>


<?php
// Inicia a sessão para acessar variáveis de sessão.
session_start();

// Inclui o arquivo de conexão com o banco de dados.
include_once("c_conexao.php");

// Verifica se o formulário de atualização de senha foi submetido.
if(isset($_POST['update'])){
    // Obtém o ID do usuário da variável de sessão.
    $id = $_SESSION['id'];

    // Obtém as senhas enviadas pelo formulário.
    $senhaAtual = $_POST['senhaAtual'];
    $senhaNova = $_POST['senhaNova'];
    $confirmacao = $_POST['senhaConfirmacao'];

    // Consulta o banco de dados para obter a senha atual do usuário.
    $result = mysqli_query(conectar(), "SELECT * FROM funcionario WHERE id=$id");
    $row = mysqli_fetch_array($result);
    $senha = $row['senha'];

    // Verifica se a senha atual fornecida corresponde à senha armazenada no banco de dados.
    if(md5($senhaAtual) !== $senha){
        // Se a senha atual não corresponder, exibe uma mensagem de erro e um botão "Voltar".
        echo "<script type='text/javascript'>
            alert('Senha atual incorreta.');
            window.location.href='../view/user/alterarSenha.php';</script>";
    } else if($senhaNova !== $confirmacao){
        // Se a nova senha e a confirmação não coincidirem, exibe uma mensagem de erro e um botão "Voltar".
        echo "<script type='text/javascript'>
            alert('Confirmação da nova senha incorreta.');
            window.location.href='../view/user/alterarSenha.php';</script>";
    } else if(md5($senhaNova) == $senha){
        // Se a nova senha for igual à senha atual, exibe uma mensagem de erro e um botão "Voltar".
        echo "<script type='text/javascript'>
            alert('A nova senha é igual à senha atual.');
            window.location.href='../view/user/alterarSenha.php';</script>";
    } else{
        // Se todas as verificações passarem, atualiza a senha no banco de dados.
        $result = mysqli_query(conectar(), "UPDATE funcionario SET senha=md5('$senhaNova') WHERE id=$id")
            or die("Falha ao se conectar com o banco de dados.");
    
            echo "<script type='text/javascript' defer>
            window.location.href='../view/user/perfil.php';</script>";
    }
}
?>

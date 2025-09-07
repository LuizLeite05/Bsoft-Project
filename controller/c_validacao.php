<?php
session_start();
include_once("c_conexao.php");

// Verifica se o formulário de login foi submetido.
if(isset($_POST['login'])){
    // Obtém o email e a senha do formulário e realiza a proteção contra SQL injection.
    $email = mysqli_real_escape_string(conectar(), $_POST['email']);
    $senha = mysqli_real_escape_string(conectar(), $_POST['senha']);

    // Executa uma consulta SQL para buscar um usuário com o email e senha fornecidos.
    $result = mysqli_query(conectar(), "SELECT * FROM funcionario WHERE email='$email' AND senha=md5('$senha')")
            or die("Falha ao se conectar com o banco de dados");
    $row = mysqli_fetch_assoc($result);

    // Verifica se a consulta retornou um resultado (usuário válido).
    if(is_array($row) && !empty($row)){
        // Inicia a sessão e define variáveis de sessão para o usuário autenticado.
        $_SESSION['valid'] = true;
        $_SESSION['email'] = $row['email'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['id_setor'] = $row['id_setor'];
        $_SESSION['data_admissao'] = $row['data_admissao'];
        $_SESSION['em_ferias'] = $row['em_ferias'];
        $_SESSION['administrador'] = $row['administrador'];

        // Verifica se o usuário é um administrador ou não e redireciona para a página apropriada.
        if($_SESSION['valid'] = true){
            if ($_SESSION['administrador'] == false) {
                header('Location: ../view/user/pag-inicial.php');
            } else {
                header('Location: ../view/admin/pag-inicial-admin.php');
            }
        }
       
    } else{
        // Se a consulta não retornar um resultado, exibe uma mensagem de erro.
        echo "<script type='text/javascript'>
            alert('Email ou senha incorretos.');
            window.location.href = '../view/index.php';
            </script>";
    }
}
?>


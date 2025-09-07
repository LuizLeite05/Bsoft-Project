<?php
    // Inclui o arquivo de conexão com o banco de dados.
    include_once("c_conexao.php");

    // Verifica se o formulário de atualização foi submetido.
    if(isset($_POST['update'])){
        // Obtém o ID do funcionário e o novo nome enviado pelo formulário.
        $id = $_POST['id'];
        $nome = $_POST['nome'];

        // Verifica se o campo de nome está vazio.
        if(empty($nome)){
            // Se o campo estiver vazio, exibe uma mensagem de erro em vermelho.
            echo "<script type='text/javascript'>
                alert('Preencha o campo');
                window.location.href='../view/user/alterarNome.php';</script>";
        } else{
            // Executa uma consulta SQL para atualizar o nome do funcionário no banco de dados.
            $result = mysqli_query(conectar(), "UPDATE funcionario SET nome='$nome' WHERE id=$id");
            
            // Redireciona o usuário de volta para a página de perfil após a atualização.
            header("Location: ../view/user/perfil.php");
        }
    }
?>

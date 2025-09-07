<?php
    // Inclui o arquivo de conexão com o banco de dados.
    include_once("c_conexao.php");

    // Verifica se o formulário de atualização foi submetido.
    if(isset($_POST['update'])){
        // Obtém o novo nome do setor e o ID do setor enviado pelo formulário.
        $nome = $_POST['nome_setor'];
        $id = $_POST['id'];

        // Verifica se o campo de nome do setor está vazio.
        if($nome == ""){
            // Se o campo estiver vazio, exibe uma mensagem de erro em vermelho.
            echo "<font color='red'>Campo(s) obrigatório(s).</font><br/>";
        } else {	
            // Executa uma consulta SQL para atualizar o nome do setor no banco de dados.
            $result = mysqli_query(conectar(), "UPDATE setor SET nome='$nome' WHERE id=$id");
            
            // Redireciona o usuário de volta para a página de listagem de setores após a atualização.
            header("Location: ../view/admin/listarSetor.php");
        }
    }
?>

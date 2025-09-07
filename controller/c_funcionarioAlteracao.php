<?php
    // Inclui o arquivo de conexão com o banco de dados.
    include_once("c_conexao.php");

    // Verifica se o formulário de atualização de funcionário foi submetido.
    if(isset($_POST['update'])){
        // Obtém os valores enviados pelo formulário.
        $nome = $_POST['nome_funcionario'];
        $data_admissao = $_POST['data'];
        $setor = $_POST['setor'];
        $id = $_POST['id'];

        // Verifica se os campos obrigatórios (nome e email) estão vazios.
        if($nome == ""){
            // Se algum campo estiver vazio, exibe uma mensagem de erro em vermelho.
            echo "<script type='text/javascript'>
                alert('Preencha o campo');
                window.location.href='../view/user/alterarFuncionario.php';</script>";
        } else{
            // Executa uma consulta SQL para atualizar os dados do funcionário no banco de dados.
            $result = mysqli_query(conectar(), "UPDATE funcionario SET nome='$nome', data_admissao='$data_admissao', id_setor='$setor' WHERE id='$id'");
            
            // Redireciona o usuário de volta para a página de listagem de funcionários após a atualização.
            echo "<script type='text/javascript'>
                alert('Dados alterados com sucesso');
                window.location.href='../view/admin/listarFuncionario.php';</script>";
        }
    }
?>
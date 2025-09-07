<?php
    // Inclui o arquivo de conexão com o banco de dados.
    include_once("c_conexao.php");
    // Inclui o arquivo que contém funções relacionadas aos funcionários no banco de dados.
    include_once("../model/m_funcionario.php");

    // Verifica se o formulário de cadastro de funcionário foi submetido.
    if(isset($_POST['submit'])){
        // Obtém os valores enviados pelo formulário.
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senhacadastro'];
        $setor = $_POST['setor'];
        $data = $_POST['data'];

        // Verifica se algum campo obrigatório está vazio.
        if($email == "" || $senha == "" || $nome == "" || $setor == "" || $data == ""){
            // Se algum campo estiver vazio, exibe uma mensagem de erro.
            echo "Campo(s) obrigatório(s) não preenchido(s).";
            echo "<br/>";
            // Adiciona um link "Voltar" para a página de cadastro.
            echo "<a href='../view/user/cadastro.php'>Voltar</a>";
        }
        else {
            // Chama a função "cadastrarFuncionario" para inserir o funcionário no banco de dados.
            $resultado = cadastrarFuncionario($nome, $email, $senha, $setor, $data);
            if($resultado) {
                // Se o cadastro for bem-sucedido, exibe uma mensagem de sucesso.
                echo "<script type='text/javascript'>
                    alert('Funcionário cadastrado com sucesso.');
                    window.location.href = '../view/index.php';
                    </script>";
            } else {
                // Se houver um erro no cadastro, exibe uma mensagem de erro.
                echo "<script type= 'text/javascript'>
                    alert('Erro ao cadastrar funcionário.');
                    window.location.href = '../view/user/cadastro.php'";
            }
        }
    }

    // Verifica se foi solicitada a exclusão de um funcionário.
    if(isset($_GET['id_exclusao'])){
        // Obtém o ID do funcionário a ser excluído.
        $id = $_GET['id_exclusao'];
        // Chama a função "excluirFuncionario" para excluir o funcionário do banco de dados.
        $result = excluirFuncionario($id);
        // Redireciona o usuário para a página de listagem de funcionários após a exclusão.
        header("Location:../view/admin/listarFuncionario.php");
    }
?>

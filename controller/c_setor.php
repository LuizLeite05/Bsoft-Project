<?php
    // Inclui o arquivo de conexão com o banco de dados.
    include_once("c_conexao.php");
    // Inclui o arquivo que contém funções relacionadas aos setores.
    include_once("../model/m_setor.php");

    // Verifica se o formulário de cadastro de setor foi submetido.
    if(isset($_POST['cadastrar'])){
        // Obtém o nome do setor enviado pelo formulário.
        $nomeSetor = $_POST['nome'];
   
        // Verifica se o campo de nome do setor está vazio.
        if($nomeSetor == ""){
            // Se o campo estiver vazio, exibe uma mensagem de erro.
            echo "Campo(s) obrigatório(s).";
            echo "<br/>";
            // Adiciona um link "Voltar" para a página de cadastro de setor.
            echo "<a href='../view/admin/cadastrarSetor.php'>Voltar</a>";
        }
        else {
            // Chama a função "cadastrarSetor" para inserir o setor no banco de dados.
            $result = mysqli_query(conectar(), "SELECT nome WHERE nome = $nomeSetor;");
            if($nomeSetor == $result['nome']){
                echo "Setor já existente.";
            } else{
                $resultado = cadastrarSetor($nomeSetor);
                if(!is_array($result)){
                    if($resultado) {
                        // Se o cadastro for bem-sucedido, exibe uma mensagem de sucesso.
                        echo "<script type='text/javascript'>  
                            alert('Dados cadastrados com sucesso.');
                            window.location.href = '../view/admin/listarSetor.php';
                            </script>";
                        // Redireciona o usuário para a página de listagem de setores.
                    } else {
                        // Se houver um erro no cadastro, exibe uma mensagem de erro.
                        echo "<script type='text/javascript'>  
                            alert('Erro ao cadastrar setor.');
                            window.location.href = '../view/admin/cadastrarSetor.php';
                            </script>";
                    }
                } else{
                    echo "<script type='text/javascript'>  
                            alert('Erro ao cadastrar setor.');
                            window.location.href = '../view/admin/cadastrarSetor.php';
                            </script>";
                }    
            }
        }
    }

    
    function mensagemErro(){
        echo "<script type='text/javascript'>  
        alert('Setor já existente.');
        window.location.href = '../view/admin/cadastrarSetor.php';
        </script>";
    }

    // Verifica se foi solicitada a exclusão de um setor.
    if(isset($_GET['id_exclusao'])){
        // Obtém o ID do setor a ser excluído.
        $id = $_GET['id_exclusao'];
        // Chama a função "excluirSetor" para excluir o setor do banco de dados.
        $result = excluirSetor($id);
        // Redireciona o usuário para a página de listagem de setores após a exclusão.
        header("Location:../view/admin/listarSetor.php");
    }    
?>


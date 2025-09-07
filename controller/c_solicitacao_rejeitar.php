<?php
    // Inclui o arquivo de conexão com o banco de dados.
    include_once("c_conexao.php");
    // Inclui o arquivo que contém funções relacionadas às solicitações.
    include_once("../model/m_solicitacao.php");

    // Verifica se o parâmetro GET 'id_rejeitar' está definido.
    if(isset($_GET['id_rejeitar'])){
        // Obtém o ID da solicitação a ser rejeitada da URL.
        $id = $_GET['id_rejeitar'];
        
        // Chama a função 'rejeitarSolicitacao' para rejeitar a solicitação com o ID especificado.
        $result = rejeitarSolicitacao($id);
        
        // Redireciona o usuário de volta para a página de listagem de solicitações após a rejeição.
        header("Location:../view/admin/listarSolicitacao.php");
    }
?>

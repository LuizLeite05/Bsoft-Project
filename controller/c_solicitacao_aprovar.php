<?php
    // Inclui o arquivo de conexão com o banco de dados.
    include_once("c_conexao.php");
    // Inclui o arquivo que contém funções relacionadas às solicitações.
    include_once("../model/m_solicitacao.php");

    // Verifica se o parâmetro GET 'id_aprovar' está definido.
    if(isset($_GET['id_aprovar'])){
        // Obtém o ID da solicitação a ser aprovada da URL.
        $id = $_GET['id_aprovar'];
        
        // Chama a função 'aprovarSolicitacao' para aprovar a solicitação com o ID especificado.
        $result = aprovarSolicitacao($id);
        
        // Redireciona o usuário de volta para a página de listagem de solicitações após a aprovação.
        header("Location:../view/admin/listarSolicitacao.php");
    }
?>

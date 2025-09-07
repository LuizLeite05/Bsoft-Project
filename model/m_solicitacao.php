<?php
    include_once("../controller/c_conexao.php");

    function aprovarSolicitacao($id){
        return mysqli_query(conectar(), "UPDATE solicitacao SET analisada = 1, aprovada = 1 WHERE event_id = $id;");
    }

    function rejeitarSolicitacao($id){
        return mysqli_query(conectar(), "UPDATE solicitacao SET analisada = 1 WHERE event_id = $id;");
    }
?>
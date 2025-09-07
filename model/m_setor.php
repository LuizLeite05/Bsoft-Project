<?php
    include_once("../controller/c_conexao.php");

    function cadastrarSetor($nomeSetor){
        $conexao = conectar();
        $query = "INSERT INTO setor (nome) VALUES ('$nomeSetor')";

        if(mysqli_query($conexao, $query)){
            return true;
        } else {
            echo "Erro ao cadastrar setor: " . mysqli_error($conexao);
            return false;
        }
    }

    function excluirSetor($id){
        return mysqli_query(conectar(), "DELETE FROM setor WHERE id=$id");
    }

    
?>
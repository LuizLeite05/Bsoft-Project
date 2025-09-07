<?php
    include_once("../controller/c_conexao.php");

    function cadastrarFuncionario($nome, $email, $senha, $setor, $data){
        $conexao = conectar();
        $query = "INSERT INTO funcionario (nome, email, senha, id_setor, data_admissao) VALUES ('$nome', '$email', md5('$senha'), '$setor', '$data')";

        if(mysqli_query($conexao, $query)){
            return true;
        } else {
            echo "Erro ao cadastrar funcionário: " . mysqli_error($conexao);
            return false;
        }
    }

    function excluirFuncionario($id){
        return mysqli_query(conectar(), "DELETE FROM funcionario WHERE id=$id");
    }
?>
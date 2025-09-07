<?php
session_start();
include_once("c_conexao.php");

// Obtém o ID do funcionário a partir da sessão.
$id_funcionario = $_SESSION['id'];

// Obtém as datas de início e término das férias do formulário e as converte para o formato Y-m-d.
$ferias_inicio = date("Y-m-d", strtotime($_POST['ferias_inicio']));
$ferias_final = date("Y-m-d", strtotime($_POST['ferias_final']));

// Cria a consulta SQL para inserir a solicitação no banco de dados.
$insert_query = "INSERT INTO `solicitacao` (`id_funcionario`, `ferias_inicio`, `ferias_final`) VALUES ('".$id_funcionario."','".$ferias_inicio."','".$ferias_final."')";

if (mysqli_query($con, $insert_query)) {
    // Se a inserção no banco de dados for bem-sucedida, retorna uma mensagem de sucesso.
    $data = array(
        'status' => true,
        'msg' => 'Solicitação realizada com sucesso!'
    );
} else {
    // Se houver um erro na inserção no banco de dados, retorna uma mensagem de erro.
    $data = array(
        'status' => false,
        'msg' => 'Desculpe, não foi possível realizar a solicitação.'
    );
}

// Retorna os dados em formato JSON para serem usados no lado do cliente (JavaScript).
echo json_encode($data);
?>


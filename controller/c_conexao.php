<?php
// Esse código faz a conexão com o banco de dados
function conectar() {
    global $databaseHost, $databaseName, $databaseUsername, $databasePassword;
    $databaseHost = 'localhost';
    $databaseName = 'db_projeto';
    $databaseUsername = 'root';
    $databasePassword = '';
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    return $mysqli;
}

conectar();
$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>
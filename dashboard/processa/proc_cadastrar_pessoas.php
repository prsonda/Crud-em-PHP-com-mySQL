<?php

require_once '../../adm/conexao.php';

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$tipo_user = $_POST['tipo_user'];
$data_nasc = $_POST['data_nasc'];
$senha_hash = hash('sha512', $senha);

$sql = "INSERT INTO pessoas (cpf, nome, senha, tipo_user, data_nasc) VALUES ('$cpf', '$nome', '$senha_hash', '$tipo_user', '$data_nasc')";

$comando = $pdo->prepare($sql);
$comando->execute();

header('Location: ../../dashboard/index_dash.php');

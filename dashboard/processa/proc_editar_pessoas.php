<?php

require_once '../../adm/conexao.php';

$id = $_POST['id'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$tipo_user = $_POST['tipo_user'];
$data_nasc = $_POST['data_nasc'];
$senha_hash = hash('sha512', $senha);

if ($senha == "") {
  $sql = "UPDATE pessoas SET cpf = '$cpf', nome = '$nome', tipo_user = '$tipo_user', data_nasc = '$data_nasc' WHERE id = $id";
} else {
  $sql = "UPDATE pessoas SET cpf = '$cpf', nome = '$nome', senha = '$senha_hash', tipo_user = '$tipo_user', data_nasc = '$data_nasc' WHERE id = $id";
}

$comando = $pdo->prepare($sql);
$comando->execute();

header('Location: ../../dashboard/index_dash.php');

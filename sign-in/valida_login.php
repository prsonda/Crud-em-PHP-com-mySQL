<?php

session_start();

if (isset($_POST['acao'])) {
  require_once '../adm/conexao.php';

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $senha_hash = hash('sha256', $senha);

  $sql = "SELECT * FROM pessoas WHERE pessoas.cpf =:login AND pessoas.senha = :senha_hash";

  $comando = $pdo->prepare($sql);
  $comando->bindParam(':login', $usuario);
  $comando->bindParam(':senha_hash', $senha_hash);
  $comando->execute();

  if ($comando->rowCount() == 1) {
    $usuarioLogado = $comando->fetch(PDO::FETCH_ASSOC);
    $_SESSION['nome'] = $usuarioLogado['nome'];

    header('Location: ../dashboard/index_dash.php');
  } else {
    header('Location: index.php');
  }
} else {
  echo 'Acesso negado!';
}

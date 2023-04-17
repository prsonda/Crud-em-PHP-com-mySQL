<?php

require_once '../../adm/conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM pessoas WHERE id = $id";

$comando = $pdo->prepare($sql);
$comando->execute();

if ($comando) :
  echo "<script>alert('Registro excluído com sucesso!'); window.location.href= '../../dashboard/index_dash.php'</script>";

else :
  echo "<script>alert('Erro ao excluir registro!'); window.location.href= '../../dashboard/index_dash.php'</script>";
endif;

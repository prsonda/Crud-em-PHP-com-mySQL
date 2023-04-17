<?php

require_once "view/topo.php";
require_once "view/lateral.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  require_once '../adm/conexao.php';

  $sql = "SELECT * FROM pessoas WHERE id = $id";

  $comando = $pdo->prepare($sql);
  $comando->execute();

  $pessoas = $comando->fetch(PDO::FETCH_ASSOC);
} else {
  header("Location: ../dashboard/index_dash.php");
}


if ($pessoas['tipo_user'] == "1") {
  $tipo_user1 = "Administrador";
  $valor1 = "1";
  $tipo_user2 = "Usuário";
  $valor2 = "2";
} else {
  $tipo_user1 = "Usuário";
  $valor1 = "2";
  $tipo_user2 = "Administrador";
  $valor2 = "1";
}

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <form method="POST" action="../dashboard/processa/proc_editar_pessoas.php">
      <br>
      <label for="cpf">CPF</label><br>
      <input type="text" name="cpf" value="<?php echo $pessoas['cpf']; ?>" /><br><br>
      <label for="nome">Nome</label><br>
      <input type="text" name="nome" size="50" value="<?php echo $pessoas['nome']; ?>" /><br><br>
      <label for="senha">Senha</label><br>
      <input type="password" name="senha" placeholder="Nova senha" /><br><br>
      <label for="tipo_user">Tipo de usuário</label><br>
      <select name="tipo_user">
        <option value="<?php echo $valor1; ?>"><?php echo $tipo_user1; ?></option>
        <option value="<?php echo $valor2; ?>"><?php echo $tipo_user2; ?></option>
      </select>

      <br><br>
      <label for="data_nasc">Data de nascimento</label><br>
      <input type="date" name="data_nasc" value="<?php echo $pessoas['data_nasc']; ?>" /><br><br>
      <input type="hidden" name="id" value="<?php echo $pessoas['id']; ?>" />

      <input type="submit" class="btn btn-success" value="Salvar" />
      <a class="btn btn-danger" href="index_dash.php">Cancelar</a>
    </form>
  </div>
</main>

<?php
require_once "view/rodape.php";

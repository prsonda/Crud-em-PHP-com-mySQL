<?php

require_once "view/topo.php";
require_once "view/lateral.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <form method="POST" action="../dashboard/processa/proc_cadastrar_pessoas.php">
      <br>
      <label for="cpf">CPF</label><br>
      <input type="text" name="cpf" placeholder="Digite seu CPF"><br><br>
      <label for="nome">Nome</label><br>
      <input type="text" name="nome" size="50" placeholder="Digite seu nome"><br><br>
      <label for="senha">Senha</label><br>
      <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
      <label for="tipo_user">Tipo de usuário</label><br>
      <select name="tipo_user">
        <option value="1">Administrador</option>
        <option value="2">Usuário</option>
      </select>
      <br><br>
      <label for="data_nasc">Data de nascimento</label><br>
      <input type="date" name="data_nasc" placeholder="Digite sua data de nascimento"><br><br>

      <input type="submit" class="btn btn-success" value="Cadastrar">
    </form>
  </div>
</main>

<?php
require_once "view/rodape.php";

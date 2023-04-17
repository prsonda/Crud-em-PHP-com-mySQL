<?php
require_once '../adm/conexao.php';

$sql = "SELECT * FROM pessoas";

$comando = $pdo->prepare($sql);
$comando->execute();

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <h4>
      <?php
      if (isset($_SESSION['nome'])) {
        echo "Bem vindo, " . $_SESSION['nome'] . "!";
      }
      ?>
    </h4>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">XLS</button> -->
      </div>
      <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar" class="align-text-bottom"></span>
        Essa semana
      </button> -->
    </div>
  </div>

  <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->



  <h2>Manutenção de pessoas
    <a class="btn btn-success" href="../dashboard/cadastrar.php">Novo registro</a>
  </h2>

  <div class="table-responsive">
    <table class="table table-striped table-sm" id="minhaTabela">
      <thead>
        <tr>
          <th>ID</th>
          <th>CPF</th>
          <th>Nome</th>
          <th>Tipo de usuário</th>
          <th>Data de nascimento</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($pessoas = $comando->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>
            <td><?php echo $pessoas['id']; ?></td>
            <td><?php echo $pessoas['cpf']; ?></td>
            <td><?php echo $pessoas['nome']; ?></td>
            <td><?php echo $pessoas['tipo_user']; ?></td>
            <td><?php echo (date("d/m/Y", strtotime($pessoas['data_nasc']))); ?></td>
            <td><a class="btn btn-sm btn-primary" href="../dashboard/editar.php?id=<?php echo $pessoas['id']; ?>">Editar</a></td>
            <td><a class="btn btn-sm btn-danger" href="../dashboard/processa/proc_excluir_pessoas.php?id=<?php echo $pessoas['id']; ?>">Excluir</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</main>
</div>
</div>
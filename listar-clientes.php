<?php
session_start();
include './includes/header.php';
require './conn/conn.php';

if(empty($_SESSION)){
  header('Location: /index.php');
}

include './php/list.php';

?>
<?php include './includes/nav.php' ?>

  <div class="container spaces spaces2">
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Data de Nascimento</th>
              <th scope="col">RG</th>
              <th scope="col">CPF</th>
              <th scope="col">Telefone</th>
              <th scope="col">Endereço Principal</th>
              <th scope="col">Editar</th>
              <th scope="col">Remover</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($clientes as $key => $value):
            ?>
              <tr>
                <th scope="row"><?= $value['id'] ?></th>
                <td><?= $value['Nome'] ?></td>
                <td><?= $value['Data_de_nascimento'] ?></td>
                <td><?= $value['Rg'] ?></td>
                <td><?= $value['Cpf'] ?></td>
                <td><?= $value['Telefone'] ?></td>
                <td><?= $value['endereco1'] ?></td>
                <form action="/editar-clientes.php" method="POST">
                    <input type="hidden" name="id" value="<?= $value['id'] ?>" />
                    <td><button class="tim btn btn-primary">Editar
                    </button></td>
                </form>
                <form action="./php/deletar.php" method="POST">
                    <input type="hidden" name="id" value="<?= $value['id'] ?>" />
                    <td><button class="tim btn btn-primary">Remover
                    </button></td>
                </form>
                </tr>
            <?php
              endforeach;
            ?>
          </tbody>
        </table>
    </div>
  </div>
<?php 

include './includes/footer.php';

?>
<?php
session_start();
include './includes/header.php';
require './conn/conn.php';
if(empty($_SESSION)){
  header('Location: /index.php');
}
$id = $_POST['id'];

include './php/edite.php';

?>

    <?php include './includes/nav.php' ?>
      <div class="container">
        <div class="row text-center">
          <h1 class="text-center h12">Editar usuário</h1>
        </div>
      </div>
      <div class="container spaces">
        <div class="row formu2">
          <form method="post" action="./php/edit.php" name="forms">
            <div class="form-row">
              <div class="form-group coluna">
                <label for="titulo">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" value="<?= $clientes[0]['Nome'] ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group coluna">
                <label for="descricao">Data de Nascimento</label>
                <textarea class="form-control coluna" id="datan" rows="3" name="datan" placeholder="<?= $clientes[0]['Data_de_nascimento'] ?>" value="<?= $clientes[0]['Data_de_nascimento'] ?>"></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group coluna">
                <label for="descricao">RG</label>
                <textarea class="form-control coluna" id="rg" rows="3" name="rg" placeholder="<?= $clientes[0]['Rg'] ?>" value="<?= $clientes[0]['Rg'] ?>"></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group coluna">
                <label for="descricao">CPF</label>
                <textarea class="form-control coluna" id="cpf" rows="3" name="cpf" placeholder="<?= $clientes[0]['Cpf'] ?>" value="<?= $clientes[0]['Cpf'] ?>"></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group coluna">
                <label for="descricao">Telefone</label>
                <textarea class="form-control coluna" id="telefone" rows="3" name="telefone" placeholder="<?= $clientes[0]['Telefone'] ?>" value="<?= $clientes[0]['Telefone'] ?>"></textarea>
              </div>
            </div>
            <?php 
              foreach($clientes as $key => $value):
            ?>
            <div class="form-row container1">
              <div class="form-group coluna">
                <label for="descricao">Endereços</label>
                <textarea class="form-control coluna" id="endereco" name="endereco1" placeholder="<?= $value['endereco1']?>" value="<?= $value['endereco1']?>"></textarea>
              </div>
            </div>
            <?php
            if(!empty($value['endereco2'])):
            ?>
            <div class="form-row container1">
              <div class="form-group coluna">
                <label for="descricao">Endereços</label>
                <textarea class="form-control coluna" id="endereco" name="endereco2" placeholder="<?= $value['endereco2']?>" value="<?= $value['endereco2']?>"></textarea>
              </div>
            </div>
            <?php endif; ?>
            <?php
            if(!empty($value['endereco3'])):
            ?>
            <div class="form-row container1">
              <div class="form-group coluna">
                <label for="descricao">Endereços</label>
                <textarea class="form-control coluna" id="endereco" name="endereco3" placeholder="<?= $value['endereco3']?>" value="<?= $value['endereco3']?>"></textarea>
              </div>
            </div>
            <?php endif; ?>
            <?php
            if(!empty($value['endereco4'])):
            ?>
            <div class="form-row container1">
              <div class="form-group coluna">
                <label for="descricao">Endereços</label>
                <textarea class="form-control coluna" id="endereco" name="endereco4" placeholder="<?= $value['endereco4']?>" value="<?= $value['endereco4']?>"></textarea>
              </div>
            </div>
            <?php endif; ?>
            <?php
            if($value['endereco5'] == true):
            ?>
            <div class="form-row container1">
              <div class="form-group coluna">
                <label for="descricao">Endereços</label>
                <textarea class="form-control coluna" id="endereco" name="endereco5" placeholder="<?= $value['endereco5']?>" value="<?= $value['endereco5']?>"></textarea>
              </div>
            </div>
            <?php endif; ?>
            <?php
            if($value['endereco6'] == true):
            ?>
            <div class="form-row container1">
              <div class="form-group coluna">
                <label for="descricao">Endereços</label>
                <textarea class="form-control coluna" id="endereco" name="endereco6" placeholder="<?= $value['endereco6']?>"></textarea>
              </div>
            </div>
            <?php endif; ?>
            <?php
           if($value['endereco7'] == true):
            ?>
            <div class="form-row container1">
              <div class="form-group coluna">
                <label for="descricao">Endereços</label>
                <textarea class="form-control coluna" id="endereco" name="endereco7" placeholder="<?= $value['endereco7']?>"></textarea>
              </div>
            </div>
            <?php endif; ?>
            <?php
            if($value['endereco8'] == true):
            ?>
            <div class="form-row container1">
              <div class="form-group coluna">
                <label for="descricao">Endereços</label>
                <textarea class="form-control coluna" id="endereco" name="endereco8" placeholder="<?= $value['endereco8']?>"></textarea>
              </div>
            </div>
            <?php endif; ?>
            <?php
            if($value['endereco9'] == true):
            ?>
            <div class="form-row container1">
              <div class="form-group coluna">
                <label for="descricao">Endereços</label>
                <textarea class="form-control coluna" id="endereco" name="endereco9" placeholder="<?= $value['endereco9']?>"></textarea>
              </div>
            </div>
            <?php endif; ?>
            <?php
            if($value['endereco10'] == true):
            ?>
            <div class="form-row container1">
              <div class="form-group coluna">
                <label for="descricao">Endereços</label>
                <textarea class="form-control coluna" id="endereco" required name="endereco10" placeholder="<?= $value['endereco10']?>"></textarea>
              </div>
            </div>
            <?php
            endif;
              endforeach;
            ?>
            <input type="hidden" name="id" value="<?= $id ?>" />
            <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
        </div>
      </div>
<?php 
include './includes/footer.php';
?>
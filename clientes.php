<?php
session_start();
include './includes/header.php';
require './conn/conn.php';

if(empty($_SESSION)){
  header('Location: /index.php');
}
?>

    <?php include './includes/nav.php' ?>
      <div class="container">
        <div class="row text-center">
          <h1 class="text-center h12">Cadastre seu cliente.</h1>
        </div>
      </div>
      <div class="container spaces">
        <div class="row formu2">
          <form method="post" action="./php/inserir.php" name="forms">
          <div class="form-row">
              <div class="form-group coluna">
                <label for="titulo">Nome</label>
                <input type="text" class="form-control" id="nome" required name="nome" placeholder="Nome">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group coluna">
                <label for="descricao">Data de Nascimento</label>
                <textarea class="form-control coluna" id="datan" rows="3" required name="datan" placeholder="Data de Nascimento"></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group coluna">
                <label for="descricao">RG</label>
                <textarea class="form-control coluna" id="rg" rows="3" required name="rg" placeholder="RG"></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group coluna">
                <label for="descricao">CPF</label>
                <textarea class="form-control coluna" id="cpf" rows="3" required name="cpf" placeholder="CPF"></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group coluna">
                <label for="descricao">Telefone</label>
                <textarea class="form-control coluna" id="telefone" rows="3" required name="telefone" placeholder="Telefone"></textarea>
              </div>
            </div>
            <div class="form-row container1">
              <div class="form-group coluna">
                <label for="descricao">Endereços</label>
                <textarea class="form-control coluna" id="endereco" required name="endereco1" placeholder="Endereço"></textarea>
              </div>
              <button class="btn btn-primary custom">Adicionar outro endereço &nbsp; 
                <span style="font-size:16px; font-weight:bold;">+ </span>
              </button>
            </div>
            <input type="hidden" name="id" value="<?= $id ?>" />
            <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
        </div>
      </div>
<?php 

include './includes/footer.php';

?>
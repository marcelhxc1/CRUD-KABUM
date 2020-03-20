<?php 
session_start();
include './includes/header.php';
require './conn/conn.php';
include './includes/nav.php';
?>

    <div class="container titulo">
        <div class="row">
            <h1 class="text-center titulo"> Faça Login para abrir o seu chamado</h1>
        </div>    
    </div>
    <div class="container">
        <div class="row formu">
            <form method="post" action="./php/login.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" value="" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>
<?php 

include './includes/footer.php';

?>
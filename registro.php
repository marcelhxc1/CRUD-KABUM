<?php 
include './includes/header.php';
require './conn/conn.php';
?>

    <div class="container titulo">
        <div class="row">
            <h1 class="text-center titulo"> Cadastre-se para abrir um chamado!</h1>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <form class="autos" method="post" action="./php/reg.php" name="forms1">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome completo</label>
                        <input type="nome" class="form-control" name="nome" id="nome" required placeholder="Preencha seu nome completo">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required placeholder="Preencha seu e-mail!">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required placeholder="Preencha sua senha!">
                    </div>
                </div>
                <button type="submit" oncLick="validarReg(); envioReg();" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>

<?php 

include './includes/footer.php';

?>
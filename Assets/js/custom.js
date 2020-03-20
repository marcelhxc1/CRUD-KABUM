
function envio() {

            var r=confirm("Cliente Cadastrado com Sucesso");
            if (r==true) {
            window.location="clientes.php";
            teste.submit();
            }
        }

        
        function envioReg() {

            var r=confirm("Conta criada com sucesso");
            if (r==true) {
            window.location="index.php";
            teste.submit();
            }
        }

        function validarReg(){
            var nome = forms1.nome.value;
            var email = forms1.email.value;
            var senha = forms1.password.value;
            
            if(nome == ""){
                alert('Preencha o campo de nome.');
                formuser.nome.focus();
                return false;
            }
            
            if(email == ""){
                alert('Preenchao e-mail.');
                formuser.email.focus();
                return false;
            }

            if(senha == ""){
                alert('Preencha a senha.');
                formuser.senha.focus();
                return false;
            }
           
        }


 $(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".custom");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<textarea class="form-control coluna btn-space" id="telefone" required name="endereço'+ x + '" placeholder="Endereço '+ x +'"</textarea>'); //add input box
        } else {
            alert('Limite de endereços atingido')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('textarea').remove();
        x--;
    })
});
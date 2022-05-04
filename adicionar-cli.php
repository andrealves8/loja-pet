<?php
//header
include_once 'includes/header.php';
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Novo Cliente </h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="sobrenome">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">Telefone</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="logradouro" id="logradouro">
                <label for="logradouro">Logradouro</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="bairro" id="bairro">
                <label for="bairro">Bairro</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade">
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cep" id="cep">
                <label for="cep">CEP</label>
            </div>
            
            
            <button type="submit" name="btn-cadastrar-cli" class="btn">Cadastrar</button>
            <a href="lista-cli.php" class="btn green"> Listar Clientes </a>
        </form>    
     
   </div>
</div>
<?php

//footer
include_once 'includes/footer.php';

?>


<?php
//header
include_once 'includes/header.php';
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Novo Pet </h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="especie" id="especie">
                <label for="especie">Especie</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="raca" id="raca">
                <label for="raca">Raça</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>
            
            <button type="submit" name="btn-cadastrar-pet" class="btn">Adicionar</button>
            <a href="lista-pet.php" class="btn green">Listar todos </a>
        </form>    
     
   </div>
</div>
<?php

//footer
include_once 'includes/footer.php';

?>


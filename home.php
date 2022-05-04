<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Mensagem
include_once 'includes/mensagem.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Gerenciamento de Pets </h3>
        <h6 class="light">Escolha uma opção:</h6>
    <br>
    <a href="lista-pet.php" class="btn orange">Listar todos</a>
    <a href="adicionar-pet.php" class="btn">Adicionar</a>
    <a href="excluir.php" class="btn red">Excluir</a>
   </div>
</div>

<?php

//footer
include_once 'includes/footer.php';

?>


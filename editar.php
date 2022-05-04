<?php
//Conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM animais WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql); 
    $dados = mysqli_fetch_array($resultado);
endif;
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Cliente </h3>
        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value= "<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="especie" id="especie" value="<?php echo $dados['especie']; ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="raca" id="raca" value="<?php echo $dados['raca']; ?>">
                <label for="sobrenome">Sobreome</label>
             </div>
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
                <label for="idade">Idade</label>
             </div>
             <button type="submit" name="btn-editar" class="btn"> Atualizar</button>
             <a href="home.php" class="btn green"> Lista de clentes </a>
        </form>    
     
   </div>
</div>
<?php

//footer
include_once 'includes/footer.php';

?>


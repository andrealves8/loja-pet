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
        <h3 class="light"> Pets </h3>
    <table class="striped">
        <trhead>
            <tr>
                <th>Espécie</th>
                <th>Raça</th>
                <th>Idade</th>
                <th>Editar</th>
                
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM animais";
            $resultado = mysqli_query($connect, $sql);
            
            if(mysqli_num_rows($resultado) > 0):

            while($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr>
                <td><?php echo $dados['especie']; ?></td>
                <td><?php echo $dados['raca']; ?></td>
                <td><?php echo $dados['idade']; ?></td>
                <td><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                   
                <!-- Modal Structure -->
            <div id="modal<?php echo $dados['id']; ?>" class="modal">
                <div class="modal-content">
                <h4>Opa!</h4>
                <p>Tem certeza que deseja excluir esse pet?</p>
                </div>
                <div class="modal-footer">
                
                <form action="php_action/delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                    <button type="submit" name="btn-deletar" class="btn red">Sim,
                        quero deletar</button>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
            </form>
                
                </div>
            </div>
            </tr>
            <?php 
        endwhile;
    
        endif;
        ?>

        </tbody>
            
    </table>
    <br>
    <a href="adicionar-pet.php" class="btn">Adicionar</a>
   </div>
</div>

<?php

//footer
include_once 'includes/footer.php';

?>


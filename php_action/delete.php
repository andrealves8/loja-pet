<?php
// Sessão
 session_start();
// Conexão
   require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
  
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM animais WHERE id= '$id'";

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "deletado com sucesso!";
        header('location: ../excluir.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar";
        header('location: ../excluir.php?');
   endif;
endif;
?>
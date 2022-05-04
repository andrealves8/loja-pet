<?php
// Sessão
session_start();
// Conexão
   require_once 'db_connect.php';
if(isset($_POST['btn-editar'])):
    $especie = mysqli_escape_string($connect,$_POST['especie']);
    $raca = mysqli_escape_string($connect,$_POST['raca']);
    $idade = mysqli_escape_string($connect,$_POST['idade']);

    $id = mysqli_escape_string($connect,$_POST['id']);

    $sql = "UPDATE animais SET especie = '$especie', raca = '$raca', idade = '$idade' WHERE id = '$id'";

        if (mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = 'Atualizado com sucesso!';
        header('location: ../home.php?');
    else:
        $_SESSION['mensagem'] = 'Erro ao atualizar';
        header('location: ../home.php?');
   endif;
endif;
?>
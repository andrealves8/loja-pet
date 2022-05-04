<?php
// Sessão
session_start();
// Conexão - Cadastro Pets
require_once 'db_connect.php';
if(isset($_POST['btn-cadastrar-pet'])):
    $especie = mysqli_escape_string($connect,$_POST['especie']);
    $raca = mysqli_escape_string($connect,$_POST['raca']);
    $idade = mysqli_escape_string($connect,$_POST['idade']);
    

    $sql = "INSERT INTO animais (especie, raca,idade) VALUES ('$especie', '$raca', '$idade')";

        if (mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = 'Cadastrado com sucesso!';
        header('location: ../home.php?');
    else:
        $_SESSION['mensagem'] = 'Erro ao cadastrar';
        header('location: ../home.php?');
   endif;
endif;

// Conexão - Cadastro Clientes
require_once 'db_connect.php';
if(isset($_POST['btn-cadastrar-cli'])):
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $email = mysqli_escape_string($connect,$_POST['email']);
    $telefone = mysqli_escape_string($connect,$_POST['telefone']);
    $logradouro = mysqli_escape_string($connect,$_POST['logradouro']);
    $bairro = mysqli_escape_string($connect,$_POST['bairro']);
    $cidade = mysqli_escape_string($connect,$_POST['cidade']);
    $cep = mysqli_escape_string($connect,$_POST['cep']);
    

    $sql = "INSERT INTO clientes (nome, email, telefone, logradouro, bairro, cidade, cep) VALUES ('$nome', '$email', '$telefone', '$logradouro', '$bairro', '$cidade', '$cep')";

    if (mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = 'Cadastrado com sucesso!';
        header('location: ../home.php?');
    else:
        $_SESSION['mensagem'] = 'Erro ao cadastrar';
        header('location: ../home.php?');
   endif;
endif;
?>
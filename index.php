<?php
// Conexão
require_once 'php_action/db_connect.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    
    if(empty($usuario) or empty($senha)):
        $erros[] = "<li> O campo usuario/senha precisa ser preenchido </li>";
    else:
        $sql = "SELECT usuario FROM atendentes WHERE usuario = '$usuario'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
        $senha = md5($senha);
        $sql = "SELECT * FROM atendentes WHERE usuario = '$usuario' AND senha = '$senha'";  
        $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            else:
                $erros[] = "<li> Usuário e senha não conferem </li>";    
            endif;
            
        else:
            $erros[] = "<li> Usuário inexistente </li>";    
        endif;    

    endif;
  
endif;    
?>

<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="js/materialize.min.js"></script>

</head>
<body>
    
<?php
if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;    
endif;
?>    
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div class="row" style="margin-top:80px">
    <div class="col s12 m4 offset-m4">
        <div class="card">
            <div class="card-action teal lighten-1 white-text">
                <h3>Login</h3>
            </div>
            
            <div class="card-content">
                <div class="form-filed">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario">
                </div><br>

                <div class="form-filed">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha">
                </div><br>

                <div class="form-field">
                    <button type="submit" name="btn-entrar" class="btn-large waves-effect waves-dark" style="width:100%;">Entrar</button>
                </div><br>

            </div>
            
        </div>
    </div>
</div>
</form>



</body>
</html>
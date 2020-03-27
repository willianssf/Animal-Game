<?php
//Conexao
require_once 'conectaBD.php';

//Sessao
session_start();

//Botao entrar
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($conn, $_POST['login']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $erro[] = "<li> O cmapo Login/senha precisa ser preenchido</li>";
endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8">
  </head>
  <body>
      <h1>Login</h1>
        <?php
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            endif;
        ?>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          Login: <input type="text" name="login"><br>
          Senha: <input type="password" name="senha"><br>
          <button type="submit" name="btn-entrar">Entrar</button>
      </form>
      
   
  </body>
</html>
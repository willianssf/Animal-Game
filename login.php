<?php
//Conexao
require_once 'conectaBD.php';

//Sessao
session_start();

//Botao entrar
if(isset($_POST['btn-entrar'])){
    $erros = array();
    $login = mysqli_escape_string($conn, $_POST['login']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);

    if(empty($login) or empty($senha)){
        $erros[] = "<li> O campo Login/senha precisa ser preenchido</li>";
    }
    else{
      $sql = "SELECT email FROM usuarios WHERE email = '$login'";
      $resultado = mysqli_query($conn, $sql);

      if(mysqli_num_rows($resultado) > 0){
        $senha = md5($senha);
        $sql = "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($conn, $sql);

          if(mysqli_num_rows($resultado) == 1){
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($conn);
            $_SESSION['logado'] = true;
            $_SESSION['id_usuario'] = $dados['id'];
            header('location: sessao_usuario.php');
          }
          else{
            $erros[] = "<li>Usuario e senha nao conferem</li>";
          }
      }
      else{
          $erros[] = "<li> Usuario inexistene</li>";
      }
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8">
  </head>
  <body>
  <link rel="stylesheet" type="text/css" href="Menu.css">
        <input type="checkbox" id="check">
            <label for="check">
                <img class="menu_hanburger" src="menu_hanburger.png">
            </label>
            <nav>
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="">Últimos Sorteios</a></li>
                    <li><a href="">Contatos</a></li>
                    <li><a href="">Sobre</a></li>
                </ul>
            </nav>
            <div class="logo_inicio">
                <a href="index.html" class="logoCSS"><img class="logo" src="logo-grande-sorte.png"></a>
            </div>
            <div>
                <a href="" class="btn_login">login</a>
                <a href="cadastro.php" class="btn_cadastrar">Cadastrar</a>
            </div> 
      <h1>Login</h1>
        <?php
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo $erro;
                }
              }
        ?>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          Login: <input type="text" name="login"><br>
          Senha: <input type="password" name="senha"><br>
         <button type="submit" name="btn-entrar">Entrar</button>
      </form>
      
   
  </body>
</html>
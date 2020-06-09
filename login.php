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
        $sql = "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha' AND nivel = 'admin'";
        $sql2 = "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha' AND nivel = 'usuario'";
        $resultado = mysqli_query($conn, $sql);
        $resultado2 = mysqli_query($conn, $sql2);

          if(mysqli_num_rows($resultado) == 1){
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($conn);
            $_SESSION['logado'] = true;
            $_SESSION['id_usuario'] = $dados['id'];
            header('location: admin/admin.php');
          }
          elseif(mysqli_num_rows($resultado2) == 1){
            $dados = mysqli_fetch_array($resultado2);
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
  <link rel="stylesheet" type="text/css" href="Estilo/Menu.css">
        <input type="checkbox" id="check">
            <label for="check">
                <img class="menu_hanburger" src="png/menu_hanburger.png">
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
                <a href="index.html" class="logoCSS"><img class="logo" src="png/logo-grande-sorte.png"></a>
            </div>
            <div>
                <a href="" class="btn_login">login</a>
                <a href="cadastro.php" class="btn_cadastrar">Cadastrar</a>
            </div>
            
        <?php
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo $erro;
                }
              }
        ?>
      <link rel="stylesheet" type="text/css" href="Estilo/login.css">
        <div class="box">
          <h2>Login</h2>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="inputBox">
              <input type="text" name="login" required="">
              <label>E-mail</label>
            </div>
            <div class="inputBox">
              <input type="password" name="senha" required="autofocus autocomplete="off
              readonly onfocus="this.removeAttribute('readonly');">
              <label>Senha</label>
            </div>
            <input type="submit" name="btn-entrar" value="Entrar">
          </form>
        </div>
  </body>
</html>
<?php
//conexao
require_once 'conectaBD.php';

//Sessao
session_start();

//Verificação
if(!isset($_SESSION['logado'])){
    header('location: index.html');
}

//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conn, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Menu.css">
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <img class="menu_hanburger" src="menu_hanburger.png">
        </label>
        <nav>
            <ul>
                <li><a href="sessao_usuario.php">home</a></li>
                <li><a href="">Últimos Sorteios</a></li>
                <li><a href="">Contatos</a></li>
                <li><a href="">Sobre</a></li>
            </ul>
        </nav>
        <div class="logo_inicio">
            <a href="sessao_usuario.php" class="logoCSS"><img class="logo" src="logo-grande-sorte.png"></a>
        </div>
        <div>
            <p>Olá <?php echo $dados['nome'] ?></p>
            <a href="logout.php" class="sair">Sair</a>
        </div>  
    </body>
</html>
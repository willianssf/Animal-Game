<?php
//conexao
require_once '../conectaBD.php';

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
        <script type="text/javascript" src="../cdn/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="sorteio.js"></script>
        <link rel="stylesheet" type="text/css" href="../estilo/styleCDN.css">
        
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <img class="menu_hanburger" src="../png/menu_hanburger.png">
        </label>
        <nav>
            <ul>
                <li><a href="admin.php">home</a></li>
                <li><a href="">Últimos Sorteios</a></li>
                <li><a href="">Contatos</a></li>
                <li><a href="">Sobre</a></li>
            </ul>
        </nav>
        <div class="logo_inicio">
            <a href="admin.php" class="logoCSS"><img class="logo" src="../png/logo-grande-sorte.png"></a>
        </div>
        <div>
            <p class="Ola">Olá <?php echo $dados['nivel'] ?></p>
            <a href="../logout.php" class="sair">Sair</a>
        </div> 
        <div>
            <input type="submit" id="geraBicho" value="Gerar" onclick="gerar()">
           <p id="mensagem"></p>
        </div>
        
        </div> 
    </body>
</html>
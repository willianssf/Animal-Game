<?php
//conexao
require_once '../conectaBD.php';

//Sessao
session_start();

//Verificação
if(!isset($_SESSION['logado'])){
    header('location: ../index.html');
}
$listagem = "SELECT * FROM data_sorteio";
$lista = mysqli_query($conn, $listagem);

//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conn, $sql);
$dados = mysqli_fetch_array($resultado);
//mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../estilo/styleCDN.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <img class="menu_hanburger" src="../png/menu_hanburger.png">
        </label>
        <nav>
            <ul>
                <li><a href="../sessao_usuario.php">home</a></li>
                <li><a href="">Contatos</a></li>
                <li><a href="">Sobre</a></li>
            </ul>
        </nav>
        <div class="logo_inicio">
            <a href="../sessao_usuario.php" class="logoCSS"><img class="logo" src="../png/logo-grande-sorte.png"></a>
        </div>
        <div>
            <p class="Ola">Olá <?php echo $dados['nome'] ?></p>
            <a href="../logout.php" class="sair">Sair</a>
        </div> 

        <!-- Busca na tabela as datas de sorteio -->
        <div>
            <form>
            <ul id="tabela_srt_ul">
                <?php
                    while($resultado_consulta = mysqli_fetch_assoc($lista)){
                        echo "<li id='tabela_srt_li'>".$resultado_consulta['data_srt']."</li><br>";
                    }      
                ?> 
            </ul>
            </form>
        </div>
        
        
           
    </body>
</html>
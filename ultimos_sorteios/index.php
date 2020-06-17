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
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ultimos Sorteios</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="../cdn/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <link rel="stylesheet" type="text/css" href="../estilo/styleCDN.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
            <input type="checkbox" id="check">
            <label for="check">
                <img class="menu_hanburger" src="../png/menu_hanburger.png">
            </label>
            <nav id="menu_nav">
                <ul id="menu_ul">
                    <li id="menu_li"><a href="../sessao_usuario.php">home</a></li>
                    <li id="menu_li"><a href="">Contatos</a></li>
                    <li id="menu_li"><a href="">Sobre</a></li>
                </ul>
            </nav>
            <div class="logo_inicio">
                <a href="../sessao_usuario.php" class="logoCSS"><img class="logo" src="../png/logo-grande-sorte.png"></a>
            </div>
            <div>
                <p class="Ola">Olá <?php echo $dados['nome'] ?></p>
                <a href="../logout.php" class="sair">Sair</a>
            </div>
        
        <div>
        <label id="escolhaData">
            <h2>Data dos ultimos jogo.</h2>
        </label>
            <select name="" id="selectData">
            <option value="">--Escolha uma data--</option>
                 <?php 
                 $select = "SELECT * FROM data_sorteio ORDER BY data_sorteio_srt ASC";
                 $resultado2 = mysqli_query($conn, $select);
                 foreach ($resultado2 as $datas): 
                 ?>
                    <option value="" id="o"><?php echo $datas['data_sorteio_srt'];?></option>
                 <?php 
                    endforeach; 
                    mysqli_close($conn);
                 ?>
            </select>
            <div id="ganhadores">
                <ul id="srt" ></ul>
            </div>
        </div>
</body>
</html> 
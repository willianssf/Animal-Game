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
        <title>Grande Sorte!</title>
        <meta charset="utf-8">
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
                <li id="menu_li"><a href="../ultimos_sorteios/index.php">ultimos sorteios</a></li>
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
        <div id="id_sobre">
            <div id="conteudo">
                <p id="titulo">
                    <h3>
                        A Grande Sorte</p>
                    </h3> 
                <p id="descricao">
                    Nossa Empresa é um sistema econômico-social organizado para produzir e ofertar produtos(bens e serviço)
                    que possam satisfazer as necessidades e desejos das pessoas, e com isto alcançar nossos objetivos, nossa
                    sustentabilidade e continuidade. Em outras palavras, uma empresa que gera riqueza e existe para atender aos 
                    interesses da sociedade.
                </p>
                <p id="encontrar">
                    Como nos encontrar?
                </p>
                <p id="contato">Faculdade Estácio de Sá atrás da TV Morena
                    contato: (67) 99999 9999 ou (67) 88888 8888 
                </p>
                <p id="dev">
                    Equipe de desenvolvimento
                    Enzo e 
                    Willian
                </p>
               
                   
               
            </div>        
        </div>
</body>
</html>
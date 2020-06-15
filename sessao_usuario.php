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
        <title>Grande Sorte!</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="cdn/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="cdn/script.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo/styleCDN.css">
        
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <img class="menu_hanburger" src="png/menu_hanburger.png">
        </label>
        <nav id="menu_nav">
            <ul id="menu_ul">
                <li id="menu_li"><a href="sessao_usuario.php">home</a></li>
                <li id="menu_li"><a href="ultimos_sorteios/index.php">ultimos sorteios</a></li>
                <li id="menu_li"><a href="">Contatos</a></li>
                <li id="menu_li"><a href="">Sobre</a></li>
            </ul>
        </nav>
        <div class="logo_inicio">
            <a href="sessao_usuario.php" class="logoCSS"><img class="logo" src="png/logo-grande-sorte.png"></a>
        </div>
        <div>
            <p class="Ola">Olá <?php echo $dados['nome'] ?></p>
            <a href="logout.php" class="sair">Sair</a>
        </div> 
        <div class="fraseInicioLog">
            <h2>Escolha um animal e torça!!!</h2>
        </div>
        <div class="icones">
            <ul id="bicho" class="coluna1">
                <li id="Avestruz" class="bicho_li"><img src="bicho/1-Avestruz.PNG" width="95" height="72" ></li>
                <li id="Cabra" class="bicho_li"><img src="bicho/6-Cabra.PNG" width="95" height="72"></li>
                <li id="Cavalo" class="bicho_li"><img src="bicho/11-Cavalo.PNG" width="95" height="72"></li>
                <li id="Leão" class="bicho_li"><img src="bicho/16-Leão.PNG" width="95" height="72"></li>
            </ul>
            <ul id="bicho" class="coluna2">
                <li id="Águia" class="bicho_li"><img src="bicho/2-Águia.PNG" width="95" height="72" ></li>
                <li id="Carneiro" class="bicho_li"><img src="bicho/7-Carneiro.PNG" width="95" height="72"></li>
                <li id="Elefante" class="bicho_li"><img src="bicho/12-Elefante.PNG" width="95" height="72"></li>
                <li id="Macaco" class="bicho_li"><img src="bicho/17-Macaco.PNG" width="95" height="72"></li>
            </ul>
            <ul id="bicho" class="coluna3">
                <li id="Burro" class="bicho_li"><img src="bicho/3-Burro.PNG" width="95" height="72" onClick=""></li>
                <li id="Camelo" class="bicho_li"><img src="bicho/8-Camelo.PNG" width="95" height="72"></li>
                <li id="Galo" class="bicho_li"><img src="bicho/13-Galo.PNG" width="95" height="72"></li>
                <li id="Porco" class="bicho_li"><img src="bicho/18-Porco.PNG" width="95" height="72"></li>
            </ul>
            <ul id="bicho" class="coluna4">
                <li id="Borboleta" class="bicho_li"><img src="bicho/4-Borboleta.PNG" width="95" height="72"></li>
                <li id="Cobra" class="bicho_li"><img src="bicho/9-Cobra.PNG" width="95" height="72"></li>
                <li id="Gato" class="bicho_li"><img src="bicho/14-Gato.PNG" width="95" height="72"></li>
                <li id="Pavão" class="bicho_li"><img src="bicho/19-Pavão.PNG" width="95" height="72"></li>
            </ul>
            <ul id="bicho" class="coluna5">
                <li id="Cachorro" class="bicho_li"><img src="bicho/5-Cachorro.PNG" width="95" height="72"></li>
                <li id="Coelho" class="bicho_li"><img src="bicho/10-Coelho.PNG" width="95" height="72"></li>
                <li id="Jacaré" class="bicho_li"><img src="bicho/15-Jacaré.PNG" width="95" height="72"></li>
                <li id="Peru" class="bicho_li"><img src="bicho/20-Peru.PNG" width="95" height="72"></li>
            </ul>
            <div class="jmodal modal">
                <a class="jmodalfechar modal-fechar"  onClick="history.go(0)">X</a>
                <p class="conteudoModal">
                    <script> pegaBicho() </script>
                </p>
                <input type="button" class="btn-comprar" id="Comprar" value="Comprar">
                    
            </div>
            <div class="links">
                <a class="jmodalabrir link-tu" href="" title="Abrir janela modal" id="Apostar">
                    Apostar
                </a>
            </div>
        </div>
    </body>
</html>
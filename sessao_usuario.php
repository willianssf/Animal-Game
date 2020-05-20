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
        <script type="text/javascript" src="cdn/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="cdn/script.js"></script>
        <link rel="stylesheet" type="text/css" href="cdn/style.css">
        
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <img class="menu_hanburger" src="png/menu_hanburger.png">
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
                <li id="Avestruz"><img src="bicho/1-Avestruz.PNG"></li>
                <li id="Cabra"><img src="bicho/6-Cabra.PNG" alt=""></li>
                <li id="Cavalo"><img src="bicho/11-Cavalo.PNG" alt=""></li>
                <li id="Leão"><img src="bicho/16-Leão.PNG" alt=""></li>
            </ul>
            <ul id="bicho" class="coluna2">
                <li id="Águia"><img src="bicho/2-Águia.PNG" alt=""></li>
                <li id="Carneiro"><img src="bicho/7-Carneiro.PNG" alt=""></li>
                <li id="Elefante"><img src="bicho/12-Elefante.PNG" alt=""></li>
                <li id="Macaco"><img src="bicho/17-Macaco.PNG" alt=""></li>
            </ul>
            <ul id="bicho" class="coluna3">
                <li id="Burro"><img src="bicho/3-Burro.PNG" alt=""></li>
                <li id="Camelo"><img src="bicho/8-Camelo.PNG" alt=""></li>
                <li id="Galo"><img src="bicho/13-Galo.PNG" alt=""></li>
                <li id="Porco"><img src="bicho/18-Porco.PNG" alt=""></li>
            </ul>
            <ul id="bicho" class="coluna4">
                <li id="Borboleta"><img src="bicho/4-Borboleta.PNG" alt=""></li>
                <li id="Cobra"><img src="bicho/9-Cobra.PNG" alt=""></li>
                <li id="Gato"><img src="bicho/14-Gato.PNG" alt=""></li>
                <li id="Pavão"><img src="bicho/19-Pavão.PNG" alt=""></li>
            </ul>
            <ul id="bicho" class="coluna5">
                <li id="Cachorro"><img src="bicho/5-Cachorro.PNG" alt=""></li>
                <li id="Coelho"><img src="bicho/10-Coelho.PNG" alt=""></li>
                <li id="Jacaré"><img src="bicho/15-Jacaré.PNG" alt=""></li>
                <li id="Peru"><img src="bicho/20-Peru.PNG" alt=""></li>
            </ul>
            <div class="jmodal modal">
                <a class="jmodalfechar modal-fechar" href="">X</a>
                <p class="conteudoModal">
                    <script src="js.js"></script>
                </p>
                <a class="btn-comprar" href="">Comprar</a>
                
            </div>
            <div class="links">
                <a class="jmodalabrir link-tu" href="" title="Abrir janela modal">
                    Apostar
                </a>
            </div>
        </div> 
       
    </body>
</html>
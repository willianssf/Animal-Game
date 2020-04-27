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
        <link rel="stylesheet" type="text/css" href="Estilo/Menu.css">
        
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
            <p>Olá <?php echo $dados['nome'] ?></p>
            <a href="logout.php" class="sair">Sair</a>
        </div> 
        <div class="fraseInicioLog">
            <h2>Escolha um animal e torça!!!</h2>
        </div>
        <div class="icones">
            <ul id="bicho" class="coluna1">
                <li id="1"><img src="bicho/1-Avestruz.PNG" alt=""></li>
                <li id="2"><img src="bicho/6-Cabra.PNG" alt=""></li>
                <li id="3"><img src="bicho/11-Cavalo.PNG" alt=""></li>
                <li id="4"><img src="bicho/16-Leão.PNG" alt=""></li>
            </ul>
            <ul class="coluna2">
                <li ><img src="bicho/2-Águia.PNG" alt=""></li>
                <li><img src="bicho/7-Carneiro.PNG" alt=""></li>
                <li><img src="bicho/12-Elefante.PNG" alt=""></li>
                <li><img src="bicho/17-Macaco.PNG" alt=""></li>
            </ul>
            <ul class="coluna3">
                <li><img src="bicho/3-Burro.PNG" alt=""></li>
                <li><img src="bicho/8-Camelo.PNG" alt=""></li>
                <li><img src="bicho/13-Galo.PNG" alt=""></li>
                <li><img src="bicho/18-Porco.PNG" alt=""></li>
            </ul>
            <ul class="coluna4">
                <li><img src="bicho/4-Borboleta.PNG" alt=""></li>
                <li><img src="bicho/9-Cobra.PNG" alt=""></li>
                <li><img src="bicho/14-Gato.PNG" alt=""></li>
                <li><img src="bicho/19-Pavão.PNG" alt=""></li>
            </ul>
            <ul class="coluna5">
                <li><img src="bicho/5-Cachorro.PNG" alt=""></li>
                <li><img src="bicho/10-Coelho.PNG" alt=""></li>
                <li><img src="bicho/15-Jacaré.PNG" alt=""></li>
                <li><img src="bicho/20-Peru.PNG" alt=""></li>
            </ul>
            <input  type="submit" name="btn-apostar" value="Apostar">
        </div> 
        <script src="js.js"></script>
    </body>
</html>
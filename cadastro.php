<!DOCTYPE html>
<html> 
    <head>
        <title>Cadastra-se</title>
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
                <a href="login.php" class="btn_login">login</a>
                <a href="cadastro.php" class="btn_cadastrar">Cadastrar</a>
            </div> 
        <link rel="stylesheet" type="text/css" href="Estilo/CadastroCSS.css">

        <div class="box">
            <h2>Cadastro</h2>
                <form method="post" action="processa.php" autocomplete="off">
                   <div class="inputBox">
                       <input type="text" name="nome" required="">
                       <label>Nome</label>
                   </div>
                   <div class="inputBox">
                       <input type="text" name="email" required="autofocus autocomplete="off
                       readonly onfocus="this.removeAttribute('readonly');">
                       <label>Email</label>
                   </div>
                   <div class="inputBox">
                       <input type="password" name="senha" required="autofocus autocomplete="off
                       readonly onfocus="this.removeAttribute('readonly');">
                       <label>Senha</label>
                   </div>
                    <input type="submit" value="Salvar">
                </form>
        </div>
    </body>
</html>
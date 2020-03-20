<!DOCTYPE html>
<html> 
    <head>
        <title>Cadastra-se</title>
        <meta charset="utf-8">       
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href="Menu.css">
        <input type="checkbox" id="check">
            <label for="check">
                <img class="menu_hanburger" src="menu_hanburger.png">
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
                <a href="index.html" class="logoCSS"><img class="logo" src="logo-grande-sorte.png"></a>
            </div>
            <div>
                <a href="" class="btn_login">login</a>
                <a href="cadastro.php" class="btn_cadastrar">Cadastrar</a>
            </div> 

        <link rel="stylesheet" type="text/css" href="CadastroCSS.css">
        <div class="container">
            <section>
                <h1>Cadastro de Usuarios</h1>
                <hr><br><br>

                <form method="post" action="processa.php">
                    <input type="submit" value="Salvar" class="btn">
                    <input type="reset" value="Limpar" class="btn">
                    <br><br>

                    Nome <br>
                    <input type="text" name="nome" class="campo" maxlength="40"required autofocus><br>
                    Email<br>
                    <input type="email" name="email" class="campo" maxlength="50"required><br>
                    Profissao<br>
                    <input type="text" name="profissao" class="campo" maxlength="40"required><br>



                </form>
            </section>

        </div>
    </body>
</html>
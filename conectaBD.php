<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cadastro";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conn){
    print "FALHA COM A CONEXAO COM O BANCO DE DADOS";
}
?>
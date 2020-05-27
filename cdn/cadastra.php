<?php

//pega o bicho do script.js e salva no banco
include_once('../conectaBD.php');

session_start();

$bicho = $_POST['bicho'];

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conn, $sql);
$dados = mysqli_fetch_array($resultado);

$nom = $dados['nome'];


$sql = "UPDATE usuarios SET bicho = '$bicho' WHERE nome = '$nom'";
$salvar = mysqli_query($conn, $sql);

mysqli_close($conn);

?>

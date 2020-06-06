<?php
//pega o bicho do sorteio.js e busca no banco os sorteados
include_once('../conectaBD.php');

session_start();

$bicho = $_POST['bicho'];

$sql = "SELECT * FROM usuarios WHERE bicho = '$bicho'";
$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado) == 1){
    $dados = mysqli_fetch_array($resultado);
    $nom = $dados['nome'];
    echo $nom;
  }
  else{
      echo "Ninguem acertou";
  }

mysqli_close($conn);
?>

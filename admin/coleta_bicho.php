<?php
//pega o bicho do sorteio.js e busca no banco os sorteados
require_once '../conectaBD.php';

$bicho = $_POST['bicho'];

$sql = "SELECT * FROM usuarios WHERE bicho = '$bicho'";
$resultado = mysqli_query($conn, $sql);


  while ($dados = $resultado->fetch_array()) 
  { 
        echo $dados['nome']."<br />"."\n"; 
  }

  

mysqli_close($conn);
?>

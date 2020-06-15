<?php
//pega o bicho do sorteio.js e busca no banco os sorteados
require_once '../conectaBD.php';

$bicho = $_POST['bicho'];
$data = date("Y/m/d");

$sql = "SELECT * FROM usuarios WHERE bicho = '$bicho'";
$resultado = mysqli_query($conn, $sql);

//imprimi na tela os ganhadores
if(mysqli_num_rows($resultado) != 0){
  while ($dados = $resultado->fetch_array()) { 
        echo $dados['nome']."<br />"."\n"; 

      //salva na tabela sorteio
       $nome = $dados['nome'];
       $animal = $dados['bicho'];

       $sql2 = "INSERT INTO sorteios(data_srt, nome, bicho) VALUES('$data', '$nome', '$animal')";
       $salva = mysqli_query($conn, $sql2);
  }
}
else{
  echo "Ninguem acertou!";
}
      $sql3 = "INSERT INTO data_sorteio(data_sorteio_srt) VALUES('$data')";
      $salvar = mysqli_query($conn, $sql3);

mysqli_close($conn);
?>

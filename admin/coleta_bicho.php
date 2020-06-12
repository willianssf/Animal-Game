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
       // $nome = $dados['nome'];
       // $animal = $dados['bicho'];

       // $sql2 = "INSERT INTO sorteios(data_sorteio, nome, bicho) VALUES('$data', '$nome', '$animal')";
       //$salvar = mysqli_query($conn, $sql2);

       
  }
}
else{
  echo "Ninguem acertou!";
}

      $sql2 = "INSERT INTO data_sorteio(data_srt) VALUES('$data')";
      $salvar = mysqli_query($conn, $sql2);

mysqli_close($conn);
?>

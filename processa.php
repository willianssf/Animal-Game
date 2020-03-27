<?php

include_once("conectaBD.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO usuarios(nome, email) VALUES('$nome', '$email', '$senha')";
$salvar = mysqli_query($conn, $sql);



if(mysqli_insert_id($conn)){
	$_SESSION["msg"] = "<p style='color:green'>Usuario cadastrado com sucesso<p>";
	header("location: index.html");

}else{
	$_SESSION["msg"] = "<p style='color:red'>Usuario não cadastrado<p>";
	header("location: index.hmtl");
}
mysqli_close($conn);

?>
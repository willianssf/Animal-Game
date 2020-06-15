<?php
    require_once '../conectaBD.php';

    $dt = $_POST['dataSrt'];
   
    
    $sql3 = "SELECT * FROM sorteios WHERE data_srt = '$dt'";
    $resultado3 = mysqli_query($conn, $sql3);
    
    foreach($resultado3 as $dataNome){
       echo '<li>'.$dataNome['nome'].'</li>';
    }

?>
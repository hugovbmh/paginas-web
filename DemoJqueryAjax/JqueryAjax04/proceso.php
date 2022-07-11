<?php
// Recibiendo los valores
$n1 = $_POST['Base'];
$n2 = $_POST['Altura'];
if ($n1==0){
    $resultado ="Oeee";
}else{
   $resultado = ($n1 * $n2)/2; 
}

echo $resultado; 
?>


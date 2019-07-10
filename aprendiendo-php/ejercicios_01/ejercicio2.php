<?php
/*
 * Obtener todos los numeros pares del 1 al 100
 */
echo "<h1>Los números pares del 1 al 100 son: </h1><br>";
for($i=0;$i<=100;$i++){
    if($i%2==0){
        echo $i ." es par <br>";
    }
}
?>

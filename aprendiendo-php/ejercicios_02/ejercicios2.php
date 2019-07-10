<?php
/*
 * Añadir valores a un array, mientras su longitud sea
 * menor a 15 y mostrar por pantalla
 */

$numeros=[];
for ($i=0;$i<15;$i++){
    array_push($numeros, $i);
}

foreach ($numeros as $elemento){
    echo $elemento . "<br>";
            
}
?>

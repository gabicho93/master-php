<?php
/*
 * Mostrar las tablas de  muttiplicar del 1 al 10
 * dentro de una tabla HTML
 */
echo "<table border=1>";
echo "<tr>";//inicio de fila 1
    for($cabecera=1;$cabecera<=10;$cabecera++){
        echo "<td>Tabla del número" . $cabecera. "</td>";
    }
echo "</tr>";//fin fila 1


echo "<tr>";//inicio fila 2
for($i=1;$i<=10;$i++){
    echo "<td>";
    //echo "contenido " .$i;
    for($k=1;$k<=10;$k++){
        echo $i . "x" .$k ."=" .($i*$k) . "<br>";     
    }
    echo "</td>";
}
echo "</tr>";//fin fila 2
echo "</table>";
?>

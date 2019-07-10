<?php
/*
 * array con 8 numero enteros y:
 * recorrer y mostrar
 * ordenar y mostrar
 * mostrar su longitud
 * buscar algun elemento por GET
 */

function mostrar_array($numeros){
    $resultado="";
    foreach ($numeros as $elemento){
    $resultado.= $elemento . "<br>";
}
return $resultado;
}

$bingo=[-2,5,70,65,90,11,0,100];
echo "<h1>Los elementos del array son: <br>";
echo mostrar_array($bingo);

echo "<h1>Los elementos del array ordenado son: <br>";
sort($bingo);
echo mostrar_array($bingo);

//
echo "<h1>La longitud del array es: " . count($bingo)." <br>";

//
if(isset($_GET["valor"])){
    $valor=$_GET["valor"];
    $busqueda=array_search($valor, $bingo);
    echo "<h1>buscar en el array el numero : " . $valor."  <br>";
    if(!empty($busqueda)){
         echo "<h4>EL numero está en el indice : " . $busqueda." </h4>";
    }else{
         echo "NO existe en el array";
    
}
}else{
    echo "<h1>Ingrese el numero a buscar por la URL</h1>";
}

?>



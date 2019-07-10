<?php


//IF
$color="rojo";
if($color!="rojo"){
    echo "el color no es rojo";
}else{
    echo "el color es rojo";
}
echo "<br>";
echo "<hr/>";
$dia=7;
if($dia==1){
    echo "LUNES";
}elseif ($dia==2) {
    echo "MARTES";
}elseif ($dia==3) {
    echo "MIERCOLES";
}elseif ($dia==4) {
    echo "JUEVES";
}elseif ($dia==5) {
    echo "VIERNES";
}elseif ($dia==6) {
    echo "SABADO";
}elseif ($dia==7) {
    echo "DOMINGO";
}

echo "<hr/>";
$pais="Taiwan";

if(!$pais){
    echo "Está en otro país diferente a Taiwan";
}else{
    echo "Está en Taiwan";
}

echo "<hr/>";
$opcion=4;

switch ($opcion){
    case 1:
        echo "Ganaste una tv";
        break;
    case 2:
        echo "Ganaste un Ipad";
        break;
    default :
        echo "Siga participando";
}

echo "<hr/>";

//GO TO
goto marca;
echo "Instruccion 1";
echo "Instruccion 2";
echo "Instruccion 3";

marca:
    echo "Con GOTO he saltado 3 echo"

?>


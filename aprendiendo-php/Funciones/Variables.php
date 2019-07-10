<?php
//variableS
// GLOBALES-disponibles dentro y fuera de las funciones
// LOCALES- disponibles solo dentro de la funcion, a menod
//que se haga un RETURN


$frase="Cuitas del alma";
echo $frase;

function mostrar(){
    global $frase;
    echo "<h1>" .$frase. "</h1>";
    
    $year=2019;
}

mostrar();


//FUNCIONES VARIABLES
function buenas_dias(){
    return "Es hora de ir al gym";
}

function buenas_tardes(){
    return "Es hora de almorzar!!";
}

function buenas_noches(){
    return "Te vas a dormir? Descansa";
}

$horario= $_GET["horario"];

$mi_funcion="buenas_" .$horario; 
echo $mi_funcion();
?>


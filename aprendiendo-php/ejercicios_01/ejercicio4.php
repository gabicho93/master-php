<?php
/*
 * Recoger dos numeros por la URL y hacer las
 * 4 operaciones básicas
 */

if(isset($_GET["numero1"]) && isset($_GET["numero2"])){
    $num1=$_GET["numero1"];
    $num2=$_GET["numero2"];
    echo "<h1> CALCULADORA </h1>";
    echo "La suma es: " . ($num1+$num2) . "<br>";
    echo "La resta es: " . ($num1-$num2) . "<br>";
    echo "El producto es: " . ($num1*$num2) . "<br>";
    echo "La división es: " . ($num1/$num2) . "<br>";
    
    }else{
        echo "introduzca los valores por la URL";
    }
?>



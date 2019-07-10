<?php
/*
 * Obtener dos números por URL y mostrar
 * los números que hay entre ellos  
 */
if(isset($_GET["numero1"])&&isset($_GET["numero2"])){
    $num1=$_GET["numero1"];
    $num2=$_GET["numero2"];
    if($num1<$num2){
        for($i=$num1;$i<=$num2;$i++){
            echo  "<h4>" .$i ."</h4><br>";
    }
    }else{
        echo "<h1>El número 1 debe ser mayor al numero 2</h1>";
    }
}else{
    echo "Ingrese los numeros por la URL";
}

?>


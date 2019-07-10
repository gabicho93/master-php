<?php

if(isset($_GET["numero1"])&&isset($_GET["numero2"])){
    $numero1=$_GET["numero1"];
    $numero2=$_GET["numero2"];
    //tabla_multiplicar($numero);
    echo calculadora($numero1, $numero2,false);
}else{
    echo "<h1>Ingrese un numero por la URL para obtener la tabla de multiplicar";
}

echo "<hr/>";




//ejemplo1
function mis_datos(){
    echo "<h1>Mi nombre es Angel Gabriel <br>";
    echo "<h2>Me gustaría trabajar en el exterior o fuera de la Provincia <br>";
    echo "<h2>Pues me fascina conocer otros lugares <br>";
    echo "<h2>Ademàs me agradan los dedportes exetremos";
}

//EJEMPLO2
function tabla_multiplicar($numero){
    echo "<h1>La tabla de multiplicar del " . $numero . " es <br>";
    for($i=1;$i<=10;$i++){
        $total=$i*$numero;
        echo $i . " x " . $numero . " = " .($total) . "<br>";
}
    
}

//EJEMPLO3
function calculadora($num1,$num2,$negrita=false){
    $s=$num1+$num2;
    $r=$num1-$num2;
    $p=$num1*$num2;
    $d=$num1/$num2;
    
    $cadena_texto="";
     
    //$negrita==true
    if($negrita){
        $cadena_texto.= "<h1>";
    }
        $cadena_texto.= 'Las 4 operaciones son:<br>';
        $cadena_texto.= "la + es: " . $s ." , " . "la - es : " .$r ."<br>";
        $cadena_texto.= "el * es: " . $p ." , " . "la / es : " .$d ."<br>";
    
   if($negrita){
       $cadena_texto.= "</h1>";
   } 
   
   return $cadena_texto;

}


    

?>

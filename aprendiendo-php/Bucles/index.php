<?php

//WHILE
//itera o repita le ejecucuiómn de unsa serie de 
//instrucciones en base a una condicion
$numero=0;
while($numero<=100){
    if($numero%10==0){
        echo "<h1>" . $numero ."</h1>";
    }else{
     echo "<ul>" 
    ."<li>" .$numero . "</li >"
            ."</ul>";
    }

    $numero++;
}

echo "<hr/>";
//EJEMPLO 2
   $cont=1;
if(isset($_GET["numero"])){
    //si el numero se recibe por la URL, ese valor es un 
    //STRING y hay que castearlo
    $numero=(int)$_GET["numero"];
    echo "<h1>La tabla de multiplicar del nùmero " .$numero . " es: <br>";
    while($cont<=10){
        echo $numero . " x " . $cont ." = " .($numero*$cont) . "<br>";    
        $cont++;
    }
   
}else{
    $numero=1;
}



//DO WHILE
//la ocndicion se evalúa al final,
//el codigo al menos se ejecuta una vez
echo "<hr/>";
$edad=18;
$contador=1;
do{
    echo "Tienes acceso al local: " .$contador . "<br>";
    $contador++;
}while ($edad>=18 && $contador<=10);
?>


<?php
/*
$total=0;
for($i=0;$i<=100;$i++){
    $total+=$i;
    //$total=$total+$i;
}
echo "<h1>la suma es: " .$total . "</h1>";
*/
echo "<hr/>";

//tabla de multiplicar
if(isset($_GET["numero"])){
    $numero=(int)$_GET["numero"];
}else{
    $numero=1;
}
echo "<h1>La tabla de multiplicar del número " .$numero . " es: </h1><br>";
for($i=1;$i<=10;$i++){
    if($numero==15){
        echo "el numero 15 está prohibido";
        break;
    }
    echo $i ."x" .$numero . "=" . ($i*$numero) ."<br>";
}
?>

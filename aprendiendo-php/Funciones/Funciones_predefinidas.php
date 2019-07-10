<?php

//debuggear
$nombre="Roman";
var_dump($nombre);

//fechas
echo date("d-m-Y");
echo time();

//matematicas
echo sqrt(10);
echo rand(1,5);
echo pi();
echo round(7.41784,2);

//

echo gettype($nombre);

//detectar tipo

if(is_string($nombre)){
    echo "esa variable es un string";
}

//comprobar si una variable existe
if(isset($numero)){
    echo "la variable existe";
}else{
    echo "la variable no existe";
}

//limpiar espacios
$frase="      ECUADOR MI PAIS        ";
var_dump(trim($frase));


//eliminar variables o indices de arrays
$year=2020;
unset($year);


//comporobar variable vacia
$texto="";
if(empty($texo)){
    echo "La variable está vacia";
} else {
    echo "la variable tiene contenido";
}


//contar caracteres de un string
$cadena="Grandilocuente";
echo strlen($cadena);


//encontrar caracter
$frase="la vida es bella";
echo strpos($frase,"vida");

//mayusculas y minniscukas
echo strtolower($cadena);
echo strtoupper($cadena);
?>


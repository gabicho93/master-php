<?php

$paises=array("Taiwan","Kuwait","Yemen","Nepal","Kazajistan");

$canciones=["Tú con el","La Rueda","Si no te hubieras ido","La cura"];

//array asociativo
$personas=["nombre"=>"Omar","apodo"=>"Omy","pais"=>"Puerto Rico"];

//FOR
echo "Listado de canciones  con bucle FOR <br>";
echo "<ul>";
for($i=0;$i<count($canciones);$i++){
    echo "<li>la cancion # " . $i . " es " .$canciones[$i] . "</li>";
}
echo "</ul>";

echo "Listado de canciones  con bucle FOREACH <br>";
echo "<ul>";
foreach ($canciones as $cancion){
    echo "<li>" . $cancion . "</li>"; 
}
echo "</ul>";




//arrays multidimensional
//array con varios arrays dentro

$contactos=[
    ["nombre"=>"German","correo"=>"gm@yahoo.es"],
    ["nombre"=>"Hernan","correo"=>"hn@yahoo.es"],
    ["nombre"=>"Teran","correo"=>"tr@yahoo.es"]
];

//echo $contactos[1]["nombre"]; 
foreach ($contactos as $contacto){
    var_dump($contacto["nombre"]);
}


?>


<?php
$autos = array("FIAT","BMW","TOYOTA");
//echo $autos=[1];
print($autos[2]);
echo "<br>"; 

$frutas = array(0 => "Manzana", 1 => "pera", 2 => "naranja");
print($frutas[2]);
echo "<br>"; 

$edad= array("harry" => "35", "Ron" => "39", "jack" => "40");
print($edad["harry"]);
echo "<br>";

foreach ($edad as $x => $x_valor){
    echo "clave =".$x. ", valor=".$x_valor; 
    echo "<br>";     
}
echo "<hr>";  
echo count($edad);
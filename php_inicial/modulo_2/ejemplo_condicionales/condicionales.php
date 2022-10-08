<?php
// IF
/*$numero = 19;
if ($numero > 20) {
    echo "es mayor que 20";
} else {
    echo "no es mayor a 20";
}
*/

// ELSE IF
/* 
"a es mayor que b"
"a es igual que b"
"a es menor que b"

$a = 60;
$b = 60;

if($a > $b){
    echo"a es mayor que b";
} elseif ($a==$b) {
    echo "a es igual que b";
} else {echo"a es menor que b";
} 

$test = 20;
if ($test > 40) {
    echo "$test es mayor que 40";
} elseif ($test > 35) {
    echo "$test es mayor que 35";
} elseif ($test < 30) {
    echo "$test es menor que 30";
} else {
    echo "$test es menor que 40,35 y 30";
} 

$i = 4;
switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;

    case 1:
        echo "i es igual a 1";
        break;
         
    case 2: 
        echo "i es igual a 2 ";       
        break;

    default:
    echo "sos otro numero";   
}
*/
//EJEMPLO DE SWHITCH
$postre = 0;
switch ($postre){
    case 0:
        echo "hoy tenemos chocotorta";
        break;
    case 1:
         echo "hoy tenemos tarta de ricota";
         break;    
    default:
        echo "hoy tenemos chocotorta";
        break;
}
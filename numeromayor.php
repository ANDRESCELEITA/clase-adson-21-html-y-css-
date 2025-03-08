<?php

$numero1 = 5000;
$numero2 = 30000;
$numero3 = 1000;

$numero5 =0;
if ($numero1 >= $numero2 and $numero1 >= $numero3){
    echo ("El numero ". $numero1 . " es mayor que el numero ". $numero2 . " y el numero " . $numero3. ".");
}else if ($numero2 >= $numero3) {
    echo ("El numero ". $numero2 . " es mayor que el numero ". $numero1 . " y el numero " . $numero3. ".");
}else{
    echo ("El numero ". $numero3 . " es mayor que el numero ". $numero1 . " y el numero " . $numero2. ".");
}


?>
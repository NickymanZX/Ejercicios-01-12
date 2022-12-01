

<!-- Ejercicio 1 -->

<?php

$numero = 35;
$suma = $numero + 1;
$resta = $numero - 5;
$divi = 105 / $numero;


echo $suma.PHP_EOL;
echo $resta.PHP_EOL;
echo $divi.PHP_EOL;

?>

<!-- Ejercicio 2 -->


<?php

$pokemon = ["id" => "01", "nombre" => "Bulbasaur", "tipo" => "Planta"];

echo $pokemon[1];

?>

<!-- Ejercicio 3 -->

<?php

$pokemon = ["id" => "01", 
            "nombre" => "Bulbasaur", 
            "tipo" => "Planta"],
            ["id" => "02", 
            "nombre" => "Ivysaur", 
            "tipo" => "Planta"],
            ["id" => "03", 
            "nombre" => "Venasaur", 
            "tipo" => "Planta"];
            
echo $pokemon = [2][3];
?>


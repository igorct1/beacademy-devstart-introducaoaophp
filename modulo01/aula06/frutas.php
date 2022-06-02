<?php

$frutas = ['Laranja', 'Limão', 'Banana', 'Abacaxi'];

foreach($frutas as $fruta) {
    echo "{$fruta}";
    echo "<br>";
}


for($i = 0; $i <= count($frutas); $i++) {
    echo "<br>";
    echo $frutas[$i];
    
}

?>

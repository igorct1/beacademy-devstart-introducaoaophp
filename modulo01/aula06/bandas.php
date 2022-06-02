<?php
$bandas = ['Slipknot', 'Limp Bizkit', 'FooFighters'];

//for
echo "<ul>";
    for($n = 0; $n <= count($bandas)-1; $n++){
        echo "<li>{$bandas[$n]}</li>";
    }
echo "</ul>";

//foreach
echo "<ul>";
    foreach($bandas as $banda) {
        echo "<li>{$banda}</li>";
    }
echo "</ul>";



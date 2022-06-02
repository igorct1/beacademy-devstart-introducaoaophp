<?php

$nome = "Igor";
$sobrenome = "Tozetti";
$idade = 27;
$cidade = 'São Paulo';
$nome2 = "Chiquim";
$nome2 .= "da Silva"; // Chiquimda Silva
echo $nome." ".$sobrenome;
echo "<br>";
// template string, só funciona com aspas duplas ""
echo "Eu me chamo {$nome}, tenho {$idade} e sou de {$cidade}";
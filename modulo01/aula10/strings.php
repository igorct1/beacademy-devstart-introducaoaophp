<?php

$nome = 'igor'; // Igor
$sobrenome = 'TOZETTI'; // Tozetti
$nome2 = "chiquin da Silva";

echo "Nome: " . ucfirst($nome);
echo "<br>";
echo "Sobrenome: " . ucfirst(strtolower($sobrenome));
echo "<br>";
echo "Nome2: " . ucwords($nome2);

?>
<?php
$arquivo = fopen('produtos.csv', 'a+');
fwrite($arquivo, 'Igor'.PHP_EOL);
fwrite($arquivo, 'Maicon'.PHP_EOL);
fwrite($arquivo, 'Isabela'.PHP_EOL);
fclose($aquivo);
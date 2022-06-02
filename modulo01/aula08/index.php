<?php

$url = $_SERVER['REQUEST_URI'];

// if ($url === '/') {
//     echo "<h1>Página inicial</h1>";
// } elseif ($url === '/login') {
//     echo "<h1>Pagina de login</h1>";
// }
// elseif ($url === '/cadastro') {
//     echo "<h1>Pagina de cadastro</h1>";
// }

echo match ($url) {
    '/login' => "<h1>Página inicial</h1>",
    '/cadastro' => "<h1>Página cadastro</h1>",
};
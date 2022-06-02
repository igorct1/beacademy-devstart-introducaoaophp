<?php

$mes = 1;

// Só existe no php 8.0 em diante
// a comparação é feita atraves de verificação de indetidade (===)
$mesUsuario = match($mes) {
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro',
};

echo $mesUsuario;
<?php

// Adicionando o programa
require_once 'index.php';

// Definindo os textos que serão utilizados
$textoum = 'Olá, tudo bem?';
$textodois = 'Olá, tudo bem?';

// Imprimindo o resultado na tela
echo cesar($textoum, 3) . "<br>";
echo cesar_ascii($textodois, 3) ;
<?php

// Adicionando o programa
require_once 'index.php';

// Adicionando o programa que quebra a criptografia na força bruta
require_once 'cesar_crack.php';

// Definindo os textos que serão utilizados
$textoum = 'Olá, tudo bem?';
$textodois = 'Olá, tudo bem?';
$textotres = 'RoƤ/#wxgr#ehpB';

// Imprimindo o resultado na tela
echo cesar($textoum, 3) . "<br>";
echo cesar_ascii($textodois, 3) . "<br>" ;
echo cesar_crack($textotres);

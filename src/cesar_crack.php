<?php

function cesar_crack($ut) {
    $txt = $ut;
    $ftxt = '';
    $v = str_split($txt);
    $len = strlen($txt);

    for ($nc = 0; $nc <= 26; $nc++) {
        for ($g = 0; $g <= $len; $g++) {
            $c = ord(@$v[$g]) - $nc;
            $ftxt = $ftxt.chr($c);
        }

        echo $ftxt . "<br>";
    }
}

echo cesar_crack('rl');

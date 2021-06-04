<?php

// está função é diferente pois usa a tabela ascii.
function cesar_crack_ascii($ut) {
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

// está função não usa a tabela ascii (uso recomendado).
function cesar_crack($string) {
    for ($nivel = 0; $nivel <= 26; $nivel++) {
        $m[] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $m[] = 'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz';
        $m[] = '01234567890123456789';
        $m[] = 'ÁáÀáÃãÂâÉéÈèÊêÑñÓóÒòÕõÔô';
        $r = '';
        for ($a = 0; $a < 2; $a++) { 
            if (!empty($r)) { 
                $string = $r;
                $r = '';
            }
            for ($i = 0; $i < strlen($string); $i++) { 
                $posm = strpos($m[$a],$string[$i]); 
                if (is_numeric($posm)) { 
                    $s = $posm + $nivel;
                    if ($s <= 0) {
                        $n = 26;
                        if ($a == 2) {
                            $n = 10;
                        }
                        $s = $s + $n;
                    }
                    $r.=$m[$a][$s];
                } else {
                    $r.=$string[$i];
                }
            }
        }
        echo $r . "<br>";
    }
}
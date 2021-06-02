<?php

function cesar($string, $nivel) {
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
    return $r;
}
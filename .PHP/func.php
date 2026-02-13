<?php
    function CalulerPrixLocation($jours) {
        if ($jours > 0) {
            if ($jours <= 3) {
                $value = 50/$jours;
            }
            elseif ($jours <= 7) {
                $value = 45/$jours;
            }
            else {
                if ($jours > 10) {
                    $value = (40/$jours)*0.90;
                }
                else {
                    $value = (40/$jours);
                }
            }
        }
        else {
            $value = "error";
        }
        return strval($value);
    }

    function calculerBonus($anc = 2, $perf = 2, $sal = 1500) {
        if ($anc > 0) {
            if ($anc > 2) {
                $value = "0%";
            }
            elseif ($anc > 5) {
                if ($perf > 0) {
                    if ($perf <= 3 ) {
                        $value (6/$sal)*100;
                    }
                    elseif ($pef <= 5) {
                        $value = (9/$sal)*100;
                    }
                }
                else {
                    $value = "error";
                }
            }    
            else {
                if ($perf > 0) {
                    if ($perf <= 3 ) {
                        $value = (8/$sal)*100;
                    }
                    elseif ($pef <= 5) {
                        $value = (12/$sal)*100;
                    }
                }
                else {
                    $value = "error";
                }
            }
        }
        else{
            $value = "error";
        }
        $strvalue = strval($value);
        return ((strlen($strvalue) >= 3) ? substr($strvalue, 0, 3) : $strvalue) ;
    }

    function calculer($a, $b, $ope) {
        if ($ope === "add"){
            $value = "$a + $b = ".($a+$b);
        }
        elseif ($ope === "sub"){
            $value = "$a - $b = ".($a-$b);
        }
        elseif ($ope === "mul"){
            $value = "$a * $b = ".($a*$b);
        }
        elseif ($ope === "div"){
            ($b !== 0) ? $value = "$a / $b = ".($a/$b) : "error div";
        }
        else {
            $value = "error";
        }
        return $value;
    }
<?php
require_once("fonctions.php");
$tab = ["name"=>$_POST["name"], "surname"=>$_POST["surname"], "birth"=>$_POST["birth"], "job"=>$_POST["job"], "salaire"=>$_POST["salaire"], "service"=>$_POST["service"]];
foreach($tab as $value) {
        $verif = (isset($value) and !empty($value)) ? True : False;
        if ($verif == False) {
            False;
        }
}
$val = ($verif==True)? createSalaries($tab) : null;
print_r($val);
?>
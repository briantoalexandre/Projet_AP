<?php
require_once("fonctions.php");
$tab = [$_POST["name"], $_POST["surname"], $_POST["birth"], $_POST["job"], $_POST["salaire"], $_POST["service"], ]
foreach($tab as $value) {
        $verif = (isset($value) and !empty($value)) ? True : False;

}

?>
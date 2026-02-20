<?php
require_once("fonctions.php");
$id = $_POST['id'];
$name = $_POST["name"];
$surname = $_POST["surname"];
$birth = $_POST["birth"];
$job = $_POST["job"];
$salaire = $_POST["salaire"];
$service = $_POST["service"];
?>


<?php
if (isset($name) and !empty($name)) {
    if (isset($surname) and !empty($surname)) {
        if (isset($birth) and !empty($birth)) {
            if (isset($job) and !empty($job)) {
                if (isset($salaire) and !empty($salaire)) {
                    if (isset($service) and !empty($service)) {
                        $tab = ["name" => $name, "surname" => $surname, "birth" => $birth, "job" => $job, "salaire" => $salaire, "service" => $service, "id" => $id];
                        print_r($tab);
                        updateSalaries($tab);
                    }
                }
            }
        }
    }
}
?>
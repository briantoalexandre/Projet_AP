<?php
require_once("connexion.php");

function createSalaries($tab) {
    try {
        global $conn;
        $sql = 'INSERT INTO `salaries` (nom, prenom, date_naissance ,date_embauche, salaire, service) VALUES
        (\''.$tab["name"].'\', \''.$tab["surname"].'\', \''.$tab["birth"].'\', \''.$tab["job"].'\', \''.$tab["salaire"].'\', \''.$tab["service"].'\')';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header('Location: createContactHTML.php');
        }

    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}
function readSalaries() {
    try {
        global $conn;
        $sql = "SELECT * FROM salaries";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultat ;
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}
function updateSalaries($tab) {
    try {
        global $conn ;
        $sql = 'update salaries set nom=\''.$tab["name"].'\', prenom=\''.$tab["surname"].'\',date_naissance=\''.$tab["birth"].'\', date_embauche=\''.$tab["job"].'\', salaire=\''.$tab["salaire"].'\', service=\''.$tab["service"].'\' where id = '.$tab["id"];
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header('Location: listeContact.php');

    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function deleteSalaries($id) {
    try {
        global $conn ;
        $sql = "delete from salaries where id=$id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header('Location: listeSalaries.php');

    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function nb_salarie(){
    try {
        global $conn ;
        $sql = "select count(id) as nb from salaries";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultat[0]["nb"] ;
    }
        catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}
function sal_moy() {
    try {
        global $conn ;
        $sql = "select avg(salaire) as moy from salaries";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultat[0]["moy"] ;
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}
function min_max() {
    try {
        global $conn ;
        $sql1 = "select min(salaire) as min from salaries";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->execute();

        $sql2 = "select max(salaire) as max from salaries";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->execute();

        $resultat = $stmt1->fetchAll(PDO::FETCH_ASSOC)[0]["min"]."-".$stmt2->fetchAll(PDO::FETCH_ASSOC)[0]["max"];
        
        return $resultat;
    }
    catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
function nb_par_serv() {
    try {
        global $conn ;
        $sql = "select service, count(id) as nb_par_service from salaries group by service";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultat ;
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

?>
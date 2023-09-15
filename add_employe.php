<?php
require "utils/Validation.php";
if ( Validation::issetPostParams(
    'noemp',
    'nom',
    'prenom',
    'emploi',
    'sup',
    'embauche',
    'sal',
    'comm',
    'noserv')) {
    try {
        $server = 'localhost';
        $db = 'emp';
        $user = 'root';
        $pwd = '';

        $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pwd);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $bdd->prepare("
            INSERT INTO emp(nom, prenom, emploi, sup, embauche, sal,comm,noserv)
            VALUES (:nom, :prenom, :emploi, :sup, :embauche, :sal, :comm, :noserv)
        ");

        $status = $stmt->execute([
            ":nom" => Validation::sanitize($_POST['nom']),
            ":prenom" => Validation::sanitize($_POST['prenom']),
            ":emploi" => Validation::sanitize($_POST['emploi']),
            ":sup" => Validation::sanitize($_POST['sup']),
            ":embauche" => Validation::sanitize($_POST['embauche']),
            ":sal" => Validation::sanitize($_POST['sal']),
            ":comm" => Validation::sanitize($_POST['comm']),
            ":noserv" => Validation::sanitize($_POST['noserv'])
        ]);
        if ($status) {
            header("Location:employe.php");
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    header('Location:index.php');
}

<?php
require "utils/Validation.php";
if ( Validation::issetPostParams('service', 'ville')) {
    try {
        $server = 'localhost';
        $db = 'emp';
        $user = 'root';
        $pwd = '';

        $bdd= new PDO("mysql:host=$server;dbname=$db", $user,$pwd);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $bdd->prepare("INSERT INTO serv(service, ville)VALUES (?,?)");
        $stm->bindValue(1,$_POST['service'],PDO::PARAM_STR);
        $stm->bindValue(2,$_POST['ville'],PDO::PARAM_STR);

        if($stm->execute()) {
            header('Location:service.php');
        }

    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
}
else {
    header('Location:index.php');
}



<?php


$server = 'localhost';
$db = 'emp';
$user = 'root';
$pwd = '';

try {
    $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pwd);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM emp ";
    $employes = $bdd->query($query); ?>

    <h1>Liste des Employés</h1>
    <div class='card-container'>
        <?php foreach ($employes as $employe) { ?>
            <div class='card'>
                <img src="img/employe.jpg" alt="service">
                <div class="container">
                    <h2><?= $employe['nom'] . ' ' . $employe['prenom'] ?></h2>
                    <p>Emploi : <?= $employe['emploi'] ?></p>
                    <p>Sup : <?= $employe['sup'] ?></p>
                    <p>Date d'embauche : <?= $employe['embauche'] ?></p>
                    <p>Salaire : <?= $employe['sal'] ?></p>
                    <p>Commission : <?= $employe['comm'] ?></p>
                    <p>Noserv : <?= $employe['noserv'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>



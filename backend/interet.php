<?php
    include_once('bdd.php');
    $connexion = new PDO('mysql:host='. $db_url . ';dbname=' . $db_name, $db_user, $db_pass);
    // configuration (pour les exceptions)
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // TODO : on vérifie que l'utlisateur (son pseudo où son email) n'existe pas déjà
    $rqt = "SELECT * FROM Interets";
    try {
        $statement = $connexion->prepare($rqt);
        $statement->execute();
        
    } catch(Exception $exception) {
     
    }
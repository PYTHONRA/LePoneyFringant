<?php 
    include_once('bdd.php'); // n'inclut le fichier que s'il n'a pas déjà été inclut

    //Récuperer les données du formulaire : méthode POST
    var_dump($_POST);
    // var_dump($_REQUEST);
   // var_dump(getallheaders());
   $pseudo = $_POST['pseudo'];
   $email = $_POST['email'];
   $password = $_POST['password'];
    try {
        // Connexion à la base de donnée
        $connexionSQL = new PDO('mysql:host=' . $db_url .';dbanme='. $db_name, $db_user, $db_pass );
        $connexionSQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // permet d'afficher le message d'erreur
    } catch (Exception $e) {
        echo $e->getMessage();
    }
<?php

$prenom = $_POST['name'];
$nom = $_POST['name'];
$date = $_POST['date'];
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmation = $_POST['password-confirmation'];
$cp = $_POST['cp'];
$adresse = $_POST['address'];
$ville = $_POST['adress'];
$numero = $_POST['phone'];

if(strlen($pseudo) > 255 || strlen($email) > 255) {
    // TODO : renvoyer une erreur et quitter ce programme
}
// vérifier la présence des mots de passe et l'égalité de mdp et de sa confirmation
if( $password != $confirmation) {
    // TODO : renvoyer une erreur et quitter ce programme
}

$hash = password_hash($password, PASSWORD_DEFAULT); 

try {
    // Connexion à la base de donnée
    $connexion = new PDO('mysql:host=' . $db_url .';dbanme='. $db_name, $db_user, $db_pass );
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // permet d'afficher le message d'erreur
} catch (Exception $e) {
    echo $e->getMessage();
}
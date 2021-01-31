<?php
    include_once('bdd.php');
    $connexion = new PDO('mysql:host='. $db_url . ';dbname=' . $db_name, $db_user, $db_pass);
    // configuration (pour les exceptions)
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  $statement=$connexion->prepare("SELECT * FROM Interets");
  $statement->execute();
  while ($row=$statement->fetch(PDO::FETCH_ASSOC)){
      extract($row);
      $json[]=$title;
  }
  echo json_encode($json);
    
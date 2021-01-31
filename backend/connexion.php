<?php 
    include_once('bdd.php'); // n'inclut le fichier que s'il n'a pas déjà été inclut

    //Récuperer les données du formulaire : méthode POST
    //var_dump($_POST);
    // var_dump($_REQUEST);
   // var_dump(getallheaders());
   $headers = getallheaders(); //on récupère tous les headers dans un tableau associatifs
   $pseudo = $_POST['pseudo'];
   $email = $_POST['email'];
   $password = $_POST['password'];
    try {
        // Connexion à la base de donnée
        $connexionSQL = new PDO('mysql:host=' . $db_url .';dbname='. $db_name, $db_user, $db_pass );
        $connexionSQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        // permet d'afficher le message d'erreur
        $rqt = "SELECT pseudo, password FROM adherents WHERE pseudo = :pseudo LIMIT 1"; //:pseudo est un paramètre de requête préparée dont on donnera la valeur au moment de l'éxectution
        // LIMIT 1 sert à être sûr qu'on ne récupère qu'une seule ligne; 
        // On va préparer la requête à partier de notre connexion à la base de données. Cette requête préparée s'appelle un statement
        $requetePreparee = $connexionSQL->prepare($rqt);
        $requetePreparee->bindParam(':pseudo', $pseudo);
    // on execute la requête
        $requetePreparee->execute();
        // On récupère les résultats : fetch() permet de récupérer une ligne, fetchAll() toutes les lignes
        // PDO::FETCH_ASSOC les résultats sont sous forme de tableau associatif (clé/valeur), 
        $resultat = $requetePreparee->fetch(PDO::FETCH_ASSOC);
        //var_dump($resultat);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    // Ici, on test si notre résultat contient quelque chose. 
    // S'il ne contient rien, le pseudo n'a pas été trouvé en base.
    if(!empty($resultat['pseudo']) && !empty($resultat['password'])) {
        $hash = $resultat['password']; 
        // Test du mot de passe 
        $ok = password_verify($password, $hash);
    } 
     
    //On vérigie dans les headers si on a un content type json
    if(!empty($headers['Accept']) && $headers['Accept'] == 'application/json') {
        
        header('Content-Type: application/json');
        if($ok) {
        echo json_encode ("vous etes connecté !"); 
    } else {
         echo json_encode("incorrect");
    }
    
 
    } else {
        header('Content-Type: text/html');
        if($ok) {
        echo "vous etes connecté !"; 
        //session_start();
        //header('location: /frontend/profil.html');
    } else {
         echo "incorrect";
    }
    }

## TODO : 
 [x]Analyse du cahier de charge.
 [x] faire les warefrime avec figma
 [x] terminé les maquettes avec figma
 [x] commencer le frontend objectif en 1 semaine
 [x] commencer le backend objectif : le temps qu'il faut
 [x] commencer par le menu hamburger 
 [x] Faire le menu hamburger avec du javascript
 [x] essayer de faire un html propre
 [x] faire une bdd
 [x] faire un footer
 [x] Faire les pages liées au projet.
 [x] Utiliser Apache
 [ ] choisir 3 à 8 centre d'intérêts parmi une liste prédéfinie lors de l'inscription
 [ ] L'utilisateur peut choisir d'uploader une image de profil
 [x] Connexion et déconnexion (blocage sur la déconnexion)
 [x] frontend pour la page Role Membre faire les requetes (en cours)
 [x] page statistique avec chart js (blocage avec le back)
 [x] responsive pour toutes les pages 
 [x] Votre design doit se conformer à une palette de couleur (variables css)

### Pour générer un mot de passe hashé (afin d'insérer un utilisateur lors de la création de la base)
```php
$pass = 'password'; //on change 'password' pour un autre mot de passe
echo password_hash($pass, PASSWORD_DEFAULT); 
// $2y$10$ZUDnrb5MXGJEXGMpZe/jK.ohuwxPquGo8cAEffq6UfyDd5irrfEGu
```

## Energistrement des utilisateurs 
 [x] un formulaire d'enregistrement HTML
 [x] le fichier de traitement des données du formulaire en PHP
    [x] récupérer les données d'enregistrement : pseudo, email, mot de passe ect..
    [x] valider les données d'enregistrement 
        [x] vérifier le format de l'email
        [x] vérifier le nombre maximal de caractères par rapport aux types renseigné lors de la création de la BDD
        [x] vérifier la présence des mots de passe et l'égalité de mdp et de sa confirmation
    [x] hashage du mot de passe
    [x] on vérifie que l'utlisateur (son pseudo où son email n'existe pas déjà)
        [x] = sql, donc pareil qu'en dessous
    [x] insertion des données dans la base de données
        [x] connexion à la base
        [x] configuration (pour les exceptions)
        [x] on écrit la requête d'insertion
        [x] on prépare la requête
        [x] on associe les valeurs (du formulaire) aux paramètres de notre requête préparée (ceux qui commencent pas `:` dans notre requête)
        [x] on execute la requête
        [x] on vérifie le nombre de ligne insérée (1 normalement)
formulaire inscription pas terminé il me manque comment s'engregistrer avec un numéro d'adhérent

## Lien vers le wireframe et maquettes 

https://www.figma.com/file/ramte2v5gRA0NNMBiGF94z/Le-poney-fringant?node-id=0%3A1 

La maquette et wireframe du profil sont complément différente... à voir
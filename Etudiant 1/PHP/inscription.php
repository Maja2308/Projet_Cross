<html>
    <head>
        <title>Inscription</title>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/style_acceuil_connexion.css" media="screen" type="text/css" />

   </head>
   <body>

<?php
// Connexion à la base de données 
        // connexion à la base de données
        $db_username = 'root';
        $db_password = 'root';
        $db_name     = 'Projet_Cross';
        $db_host     = 'localhost';
        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
            or die('could not connect to database');

        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $Mail = $_POST['Mail'];
        $Mdp = $_POST['Mdp'];
        $Classe = $_POST['Classe'];

    if ($db) {           
        $sql = "INSERT INTO Utilisateur(IdUtilisateur, Nom, Prenom, Mail, Mdp, Admin, Classe) VALUES('','$Nom','$Prenom','$Mail','$Mdp','','$Classe')";
        
        // Exécution de la requête 
        $resultat = mysqli_query($db, $sql); 
        if ($resultat == FALSE) { 
            echo "Echec de l'inscription.<br />"; 
        } 
        else { 
            echo "Personne enregistrée.<br />"; 
            //header('Location: accueil_connexion.php');
        } 

    } 
    else { 
    printf('Erreur %d : %s.<br/>',mysqli_connect_errno(),mysqli_connect_error()); 
    } 

?>

<a href="accueil_connexion.php"> Connexion </a>




</body>

</html>
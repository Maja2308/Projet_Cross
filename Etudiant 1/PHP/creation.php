<?php
        // Connexion à la base de données 
        $db_username = 'root';
        $db_password = 'root';
        $db_name     = 'Projet_Cross';
        $db_host     = 'localhost';
        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
            or die('could not connect to database');

        $Nom = $_POST['Nom'];
        $Date = $_POST['Date'];
        $Distance = $_POST['Distance'];
        $NbTours = $_POST['NbTours'];

    if ($db) {           
        $sql = "INSERT INTO Course(IdCourse, Nom, Date, Distance, NbTours, TempsDebutCourse, State) VALUES('','$Nom','$Date','$Distance','$NbTours','','')";
        
        // Exécution de la requête 
        $resultat = mysqli_query($db, $sql); 
        if ($resultat == FALSE) { 
            echo "Echec de l'inscription.<br />"; 
        } 
        else { 
            echo "Course enregistrée.<br />"; 
            header('Location: accueil.php');
        } 

    } 
    else { 
    printf('Erreur %d : %s.<br/>',mysqli_connect_errno(),mysqli_connect_error()); 
    } 

?>
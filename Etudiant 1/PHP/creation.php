<?php
        // Connexion à la base de données 
        $db_username = 'msv';
        $db_password = 'msv';
        $db_name     = 'Projet_Cross';
        $db_host     = '192.168.65.79';
        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
            or die('could not connect to database');

        $Nom = $_POST['Nom'];
        $Date = $_POST['Date'];
        $Distance = $_POST['Distance'];
        $NbTours = $_POST['NbTours'];
        $Classe = $_POST['Classe'];

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
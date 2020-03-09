<?php

    session_start();
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        // connexion à la base de données
        $db_username = 'msv';
        $db_password = 'msv';
        $db_name     = 'Projet_Cross';
        $db_host     = '192.168.65.79';
        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
            or die('could not connect to database');
        
        // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
        // pour éliminer toute attaque de type injection SQL et XSS
        $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
        $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
        
        if($username !== "" && $password !== "")
        {
            $requete = "SELECT count(*) FROM Utilisateur where 
                Nom = '".$username."' and Mdp = '".$password."' ";
            $exec_requete = mysqli_query($db,$requete);
            $reponse      = mysqli_fetch_array($exec_requete);
            $count = $reponse['count(*)'];
            if($count!=0) // nom d'utilisateur et mot de passe correctes
            {
            $_SESSION['username'] = $username;
            header('Location: accueil.php');
            }
            else
            {
            header('Location: accueil_connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
            }
        }
        else
        {
        header('Location: accueil_connexion?erreur=2'); // utilisateur ou mot de passe vide
        }
    }
    else
    {
    header('Location: accueil_connexion.php');
    }
    mysqli_close($db); // fermer la connexion

?>
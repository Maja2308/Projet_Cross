<?php
$bdd = new PDO('mysql:host=192.168.65.217;dbname=Projet_Cross', 'admin', 'admin');

if(isset($_POST['forminscription'])) {
   $pseudo = ($_POST['pseudo']);
   $mdp = ($_POST['mdp']);

   if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
               
                  if($mdp=$mdp) {
                     $insertmbr = $bdd->prepare("INSERT INTO Utilisateur('Id', 'Nom', 'Prenom', 'Mail', 'Mdp', 'Admin', 'Classe') VALUES('', '', '', '', '', '', '')");
                     $insertmbr->execute(array($pseudo,$mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"acceuil_connexion.php\">Me connecter</a>";
                  } 
                   else {
                        $erreur = "Tous les champs doivent être complétés !";
                   }
      }
   }
}
?>

<html>
    <head>
        <title>Inscription</title>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/style_acceuil_connexion.css" media="screen" type="text/css" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   </head>
   <body>

   <div class="navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top">
                <br>
                <br>
                <div id="login" class="panel panel-primary container">
                <div class="panel-heading"><h3 class="panel-title"><strong> Identification</strong></h3></div>
                   <div class="panel-body">
                        <form id="frm-login" class="form-horizontal" action="connexion.php" method="POST">
                            <fieldset>
                                <!-- Texte -->
                                <div class="form-group">

                                    <!-- Nom de famille -->
                                    <label class="control-label" for="Nom"><span class="glyphicon glyphicon-user"></span> Nom de famille </label>  
                                    <div>
                                        <input id="Nom" name="Nom" type="text" placeholder="Entrez votre nom de famille" class="form-control input-md" required="">
                                    </div>
                                    </div>
                                    
                                    <!-- Prénom -->
                                    <div class="form-group">
                                    <label class="control-label" for="Prenom"><span class="glyphicon glyphicon-user"></span> Prénom </label>
                                    <div>
                                        <input id="Prenom" name="Prenom" type="text" placeholder="Entrez votre prénom" class="form-control input-md" required="">
                                    </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="form-group">
                                    <label class="control-label" for="Mail"><span class="	glyphicon glyphicon-inbox"></span> Mail de La Providence </label>
                                    <div>
                                        <input id="Mail" name="Mail" type="text" placeholder="Entrez votre Mail de La Providence" class="form-control input-md" required="">
                                    </div>
                                    </div>

                                    <!-- Classe -->
                                    <div class="form-group">
                                    <label class="control-label" for="Classe"><span class="glyphicon glyphicon-education"></span> Classe </label>
                                    <div>
                                        <input id="Classe" name="Classe" type="text" placeholder="Entrez votre Classe" class="form-control input-md" required="">
                                    </div>
                                    </div>

                                    <!-- Mdp -->
                                    <div class="form-group">
                                    <label class="control-label" for="mdp"><span class="glyphicon glyphicon-lock"></span> Mot de passe </label>
                                    <div>
                                        <input id="mdp" name="mdp" type="password" placeholder="Entrez votre mot de passe" class="form-control input-md" required="">
                                    </div>
                                    </div>

                                    <!-- Bouton -->
                                    <div class="form-group">
                                    <label class="control-label" for="btnSigner"></label>
                                    <div>
                                        <input id="btnSigner" type="submit" name="btnSigner" class="btn btn-primary" value='Se connecter'>
                                        <a href="#" type="submit" name="btnSigner" class="btn btn-primary">Inscription</a>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                </div>
            </nav>
        </div>
    </div>



    </body>
</html>

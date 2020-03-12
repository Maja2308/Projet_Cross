<html>

<head>
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
                <div class="panel-heading"><h3 class="panel-title"><strong> Identification </strong></h3></div>
                   <div class="panel-body">
                        <form id="frm-login" class="form-horizontal" action="accueil.php" method="POST">
                            <fieldset>
                                <!-- Texte -->
                                <div class="form-group">
                                    <label class="control-label" for="Nom"><span class="glyphicon glyphicon-user"></span> Mail La Providence </label>  
                                        <input id="Nom" name="Nom" type="text" placeholder="Entrez votre nom d'utilisateur" class="form-control input-md" required="">
                                    </div>
                                    <!--Mdp -->
                                  <div class="form-group">
                                    <label class="control-label" for="Mdp"><span class="glyphicon glyphicon-lock"></span> Mot de passe </label>
                                        <input id="Mdp" name="Mdp" type="password" placeholder="Entrez votre mot de passe" class="form-control input-md" required="">
                                    </div>
                                    <!--  Bouton -->
                                   <div class="form-group">
                                    <label class="control-label" for="btnSigner"></label>
                                        <input id="btnSigner" type="submit" name="btnSigner" class="btn btn-primary" value='Se connecter'>
                                        <a href="acceuil_inscription.php" type="submit" name="btnSigner" class="btn btn-primary">Inscription</a>
                                    <?php
                                    if(isset($_GET['erreur'])){
                                        $err = $_GET['erreur'];
                                        if($err==1 || $err==2)
                                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                                    }
                                    ?>
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
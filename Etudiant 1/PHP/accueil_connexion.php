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
                <div class="panel-heading"><h3 class="panel-title"><strong> Identification</strong></h3></div>
                   <div class="panel-body">
                        <form id="frm-login" class="form-horizontal" action="connexion.php" method="POST">
                            <fieldset>
                                <!-- Texte -->
                                <div class="form-group">
                                    <label class="control-label" for="username"><span class="glyphicon glyphicon-user"></span>Nom d'utilisateur</label>  
                                    <div>
                                        <input id="username" name="username" type="text" placeholder="Entrez votre nom d'utilisateur" class="form-control input-md" required="">
                                    </div>
                                    </div>
                                    <!--Mdp -->
                                  <div class="form-group">
                                    <label class="control-label" for="mdp"><span class="glyphicon glyphicon-lock"></span> Mot de passe</label>
                                    <a class="pull-right">Mot de passe oublié</a>
                                    <div>
                                        <input id="password" name="password" type="password" placeholder="Entrez votre mot de passe" class="form-control input-md" required="">
                                    </div>
                                    </div>
                                    <!--  Bouton -->
                                   <div class="form-group">
                                    <label class="control-label" for="btnSigner"></label>
                                    <div>
                                        <input id="btnSigner" type="submit" name="btnSigner" class="btn btn-primary" value='Se connecter'>
                                        <a href="acceuil_inscription.php" type="submit" name="btnSigner" class="btn btn-primary">Inscription</a>
                                    </div>
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
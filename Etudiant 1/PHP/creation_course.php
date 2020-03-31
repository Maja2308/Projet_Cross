<html>
<head>

        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Site du Cross La Providence</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet" type="text/css">
      
</head>

<body>

    <!---------------------Menu------------------------->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark nav-masthead">
        <div class="container">
        <a class="navbar-brand" href="accueil.php"> <h3 class="masthead-brand mb-0"><i class="fas fa-running"></i></h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link p-2 font-weight-bold text-white" href="affichage_course.php">Course disponible pour inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 font-weight-bold text-white" href="accueil_course.php">Mes courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold p-2 text-white" href="creation_course.php">Creation d'une course (Temporaire)</a>
                </li>
            </ul>
            <a class="nav-link text-white p-2 font-weight-bold" href="#">Déconnexion</a>
        </div>
        </div>
    </nav>
    <!---------------------Fin Menu------------------------->


    <br>
    <div id="login" class="panel panel-primary container">
    <div class="panel-heading"><h3 class="panel-title"><strong> Création de la course </strong></h3></div>
    <div class="panel-body">
        <form id="frm-login" class="form-horizontal" action="creation.php" method="POST">
            <fieldset>
                <!--Nom de la course -->
                <div class="form-group">
                    <label class="control-label" for="Nom"><span class="glyphicon glyphicon-user"></span> Nom de la course </label>  
                    <div>
                        <input id="Nom" name="Nom" type="text" placeholder="Entrez le nom de la course" class="form-control input-md">
                    </div>
                </div>    

                <!--Date -->
                <div class="form-group">
                        <label class="control-label" for="Date"><span class="glyphicon glyphicon-user"></span> Date </label>
                    <div>
                        <input id="Date" name="Date" type="date" placeholder="Entrez la date de la course" class="form-control input-md">
                    </div>
                </div>

                <!--Distance -->
                <div class="form-group">
                    <label class="control-label" for="Distance"><span class="glyphicon glyphicon-inbox"></span> Distance (en km) </label>
                    <div>
                        <input id="Distance" name="Distance" type="number" min="1" max="100000" placeholder="Entrez la distance de tout la course" class="form-control input-md">
                    </div>
                </div>

                <!-- Nombre de Tours -->
                <div class="form-group">
                    <label class="control-label" for="NbTours"><span class="glyphicon glyphicon-briefcase"></span> Nombre de Tours </label>
                    <div>
                        <input id="NbTours" name="NbTours" type="number" min="1" max="100000" placeholder="Entrez le nombre de tours" class="form-control input-md">
                    </div>
                </div>

                <!-- Classe autoriter -->
               <!-- <div class="form-group">
                    <label class="control-label" for="Classe"><span class="glyphicon glyphicon-briefcase"></span> Classe autorisées à faire la course </label>
                    <div>
                        <select id="Classe" name="Classe" type="select" multiple class="form-control input-md" id="exampleFormControlSelect2">
                        <option>SN1</option>
                        <option>SN2</option>
                        <option>E1</option>
                        <option>E2</option>
                        </select>
                    </div>
                </div> -->

                <!--Bouton -->
                <div class="form-group">
                    <label class="control-label" for="btnSigner"></label>
                    <div>
                        <input id="btnSigner" type="submit" name="btnSigner" class="btn btn-primary" value="Crée la course">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    </div>
    </div>
   

    </body>

</html>
<html>
<head>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>

<body>

    <!---------------------Menu------------------------->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="accueil.php">
                <img src="image/logo_la_providence.jpg" alt="Logo" style="width:250px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="slide-collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inscription_course.php">INSCRIPTION A UNE COURSE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="affichage_course.php">MES COURSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="creation_course.php">CREATION D'UNE COURSE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.la-providence.net/">SITE LA PROVIDENCE</a>
                </li>
            </ul>
            </div>
        </nav>
    </div>
    <!---------------------Fin Menu------------------------->

    <br>
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
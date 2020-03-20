    <?php
        session_start();
    ?>

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
    <?php   
        if (isset($_POST['connexion'])) //Condition pour vérifier les utilisateurs 
        {
            include'connexion.php';
            $user2= new Bdd("","","","");
            $champLogin=$_POST["username"];
            $champMdp=$_POST["password"];              
            $user2->Connexion_BDD("localhost","Projet_Cross","root","root");
            $_SESSION['user']=$user2->Autorisation("user",$champLogin,$champMdp);
            $_SESSION['username']=$champLogin;
            $_SESSION['password']=$champMDP;
        }
        
        if (!isset($_SESSION['username']))
        {
            header('Location: http://127.0.0.1/Projet_Cross/accueil.php');
            //print("<script type=\"text/javascript\">  setTimeout('location=(\"http://192.168.65.79/accueil_connexion.php\")' ,10); </script>");
        }
        
    if ($_SESSION['user']==true)  //Condition si l'utilisateur est bien connecté 
        {  
            
            if($_SESSION['username'] !== ""){
                $user = $_SESSION['username'];
                // affiche un message de bienvenue
                //echo "<center style='color:black;'>Bonjour $user</center>"; 
            }
    ?>


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
    <!--------------------- Fin Menu------------------------->

    <!--------------------- Première partie :   ------------------------->
    <div class="menu-overlay"></div>

        <section class="bg-light py-5" id="banner">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-md-6  text-dark">
                        <h4><span class="badge badge-info"></span></h4>
                        <h2 class="mt-4">Looking for Premium Services? Discover PixFort Studio.</h2>
                        <button type="button" class="btn btn-info mt-4">Order Services Today</button>
                    </div>
                </div>
            </div>
        </section>
    <!--------------------- Fin Première partie :   ------------------------->


    <!---------------------  Deuxième partie : Affichage des courses disponible ------------------------->
        <section class="bg-info py-5" id="services">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Les courses disponible pour vous inscrire</h2>
                    </div>
                </div>
                <div class="row mt-4 text-center">
                    <div class="col-md-3">
                        <i class="fa fa-tachometer fa-4x text-dark"></i>
                        <a href="#" class="text-dark"><h4>Course 1</h4></a>
                        <p>20/08/2020</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-tachometer fa-4x text-dark"></i>
                        <a href="#" class="text-dark"><h4>Course 2</h4></a>
                        <p>20/08/2020</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-tachometer fa-4x text-dark"></i>
                        <a href="#" class="text-dark"><h4>Course 3</h4></a>
                        <p>20/08/2020</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-tachometer fa-4x text-dark"></i>
                        <a href="#" class="text-dark"><h4>Course 4</h4></a>
                        <p>20/08/2020</p>
                    </div>
                </div>
            </div>
        </section>
        <!--------------------- Fin Deuxième partie : Affichage des courses disponible ------------------------->


        <!--------------------- Troisième partie :   ------------------------->
        <section class=" py-5" id="services">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6">
                        <i class="fa fa-question fa-4x text-info"></i>
                        <h4 class="mt-4">Ask Us a Question</h4>
                        <p>From logo design to website designs and developers are ready to complete perfect your custom jobs.</p>
                        <button type="button" class="btn btn-info mt-4">Order Services Today</button>
                    </div>
                    <div class="col-md-6">
                        <p class="font-weight-bold">Can I Pay with PayPal?</p>
                        <p>We provides you with a full management functionality that results in faster revenue, more users, and the ability to serve your users better engaging with them efficiently.</p>
                        <p class="font-weight-bold">How about Refund policy?</p>
                        <p>We provides you with a full management functionality that results in faster revenue, more users, and the ability to serve your users better engaging with them efficiently.</p>
                        <p class="font-weight-bold">Is There a Free Trial?</p>
                        <p>We provides you with a full management functionality that results in faster revenue, more users, and the ability to serve your users better engaging with them efficiently.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--------------------- Fin Troisième partie :   ------------------------->


        <!--------------------- Quatrème partie :  ------------------------->
        <section class="bg-info py-5" id="testimonial">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Projet programmé par des génies nommée :</h4>
                        <h2>JOUEN Matthias, LAPRAYE Serge et GOSSELIN Victor</h2>
                        <p>"Ce projet été trop simple pour nous."</p>
                    </div>
                </div>
            </div>
        </section>
        <!--------------------- Fin Quatrème partie :  ------------------------->
       

        <!--------------------- Footer  ------------------------->
        <section id="footer" class="pt-5 pb-3 border-bottom">
        <div class="container ">
            <div class="row d-flex ">
                <div class="col-md-2 col-xs-3">
                <b class="text-info">INSCRIPTION</b>
                <div class="mb-2 mt-2 border-top "></div>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-secondary">About Us</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Contact Us</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Career</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Press</a></li>
                </ul>
                </div>
                <div class="col-md-2 col-xs-3">
                <b class="text-info">POLICY</b>
                <div class="mb-2 mt-2 border-top "></div>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-secondary">Return Policy</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Terms of Use</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Security</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Privacy</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Sitemap</a></li>
                </ul>
                </div>
                <div class="col-md-2 col-xs-3">
                <b class="text-info">HELP</b>
                <div class="mb-2 mt-2 border-top"></div>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-secondary">Payments</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Shipping</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Cancellation</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">FAQ</a></li>
                </ul>
                </div>
                <div class="col-md-2 col-xs-3 border-right">
                <b class="text-info">SOCIAL</b>
                <div class="mb-2 mt-2 border-top"></div>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-secondary">Facebook</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Twitter</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Instagram</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Youtube</a></li>
                </ul>
                </div>
                <div class="col-md-4 col-xs-3">
                <b class="text-info">WHO WE ARE</b>
                <div class="mb-2 mt-2 border-top "></div>
                <p class="text-secondary">Your kids deserve ting mother or a new mother, you will find everything you need to set sail on a smooth parenting journey with the help of our baby</p>
                </div>
            </div>
        </div>
        </section>
        <!--------------------- Fin Footer  ------------------------->


        <!--------------------- Copyright  ------------------------->
        <section id="copyright" class="pt-3">
        <div class="container">
            <div class="row d-flex align-items-center ">
                <div class="col-md-12 ">
                    <ul class="list-inline ">
                        <li class="list-inline-item"><small>© 2020, Créé et codé par des étuidant en BTS SN nommée Matthias JOUEN, Serge LAPRAYE et Victor GOSSELIN</small></li>
                        <li class="list-inline-item pull-right"><small>Tous les droits sont réservés</small></li>
                    </ul>
                </div>
            </div>
        </div>
        </section>
        <!--------------------- Fin Copyright  ------------------------->

        <?php
        } else 
            {
                header('Location: http://127.0.0.1/Projet_Cross/accueil.php');
                //print("<script type=\"text/javascript\">  setTimeout('location=(\"http://192.168.65.79/accueil_connexion.php\")' ,10); </script>");
            }
        ?>

</body>
</html>
<?php
    session_start();
        include'class.php';
        $user2= new Bdd("","","","");
        $champLogin=$_SESSION["username"];
        $champMdp=$_SESSION["password"];              
        $user2->Connexion_BDD("localhost","Projet_Cross","azerty","azerty");                      
        $_SESSION['admin']=$user2->Admin("user",$champLogin,$champMdp); 
?>


<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="Css/admin.css" type="text/css" />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

<body>

    <?php
        if(($_SESSION['admin'])==true)
    {
    ?>

    <div class="menu">
              <div class="data">
                <nav>
                   <ul>

                    <a href="principale.php"><li>ACCUEIL</li></a>
                    <a href="trace.php"><li>POSITION DU BATEAU</li></a>
                    <a href="deco.php"><li>DECONNEXION</li></a>

                   </ul>

                </nav>
                   
              </div>
         </div>


        <?php
            try
            {
                $bdd = new PDO('mysql:host=127.0.0.1;dbname=Projet_Cross;charset=utf8', 'root', 'root');
                //$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } 
            catch(Exception $e)
            {
                // En cas d'erreur, on affiche un message et on arrête tout
                die('could not connect to database');
            }
        ?>

        <div id="tab">
            <center>
                <table> 
                    <td><b>Nom d'utilisateur</b></td>      
                    <td><b>Mot de passe</b></td>
                    <td><b>N° d'utilisateur</b></td>

                </table>
            </center>
        </div>

        <div id="admin">
        <center>
			<form method="POST" action="admin.php">
                
                    <div class=separation></div>
                <p>
                    <label for="user_index">Numéro de l'Utilisateur à Supprimer : (ex:2)</label> 
                    <input type="number" name="user_index"/>  
                </p>	
                
                    <input class=bouton type="submit" value="Supprimer">   	
            </form>  
        </center>
            <!-- Vérification avec le user index -->
                <?php
                    if(empty($_POST))
                    {
                        $_POST["user_index"]=0;
                    }
                    $user_index = $_POST["user_index"];
                ?>
                    
                    <?php
                        if (!empty($_POST["user_index"]))
                        {
                            $result = $bdd->query("DELETE FROM user WHERE user_index='$user_index'");
                            header('Location: http://127.0.0.1/admin.php');
                        }   
                    ?>
        </div>

        <div id="modif">
            <center>
                <form method="GET" action="admin.php">
                    <p>
                        <div class="Modif">Modification</div>
                        <input type="number" name="user_index" placeholder="Index"><br>
                        <input type="text" name="username" placeholder="Nouveau nom d'utilisateur">
                        <input type="password" name="password" placeholder="Nouveau Mot de Passe">
                    </p>
                    <input class=button type="submit" value="Valider">
                </form>
            </center>

            <?php   
                    if(empty($_GET))
                    {
                        $_GET["username"]=0;
                        $_GET["password"]=0;
                        $_GET["user_index"]=0;
                    }
                    $username = $_GET["username"];
                    $password = $_GET["password"];
                    $user_index = $_GET["user_index"];
                ?>
                    
                    <?php 
                        if (!empty($_GET["username"]) && (!empty($_GET["password"])) && (!empty($_GET["user_index"])))
                        {
                            $result = $bdd->query("UPDATE user SET username = '$username',
                              password = '$password' WHERE user_index = '$user_index'");
                            header('Location: http://127.0.0.1/admin.php');
                        }
    }
    else
    {
        header('Location: http://127.0.0.1/accueil.php');
    } 
    ?>
        </div>
    </body>


</html>
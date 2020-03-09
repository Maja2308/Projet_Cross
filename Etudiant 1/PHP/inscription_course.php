<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>
<body>
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
                    <a class="nav-link" href="#">MES COURSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="creation_course.php">CREATION D'UNE COURSE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SITE LA PROVIDENCE</a>
                </li>
            </ul>
            </div>
        </nav>
    </div>

    <br>
    <br>
    
    <?php 

        $conn = new mysqli('192.168.65.79', 'msv', 'msv', 'Projet_Cross');
        if ($conn->connect_error) {
            die("Connection error: " . $conn->connect_error);
        }
    ?>

    <table class="table table-info">
            
        <th>Course</th>
        <th>Date</th>
        <th>Nombre de Tours</th>
            
        <?php
            $result = $conn->query("SELECT Nom, Date FROM Course") ;

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" .$row['Nom']."</td>" ;
                    echo "<td>".$row['Date']."</td>";
                    echo "<td>".$row['NbTours']."</td>";
                
                }
            }
        ?>

    </table>


</body>
</html>
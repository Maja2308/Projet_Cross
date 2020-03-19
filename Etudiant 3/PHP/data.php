<?php 

$conn = new mysqli('192.168.1.26', 'msv', 'msv', 'Projet_Cross');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
?>



<div class="gauche">
<table class="table table-striped">


		<th scope="col">Classement</th>
		<th scope="col">Nom</th>
		<th scope="col">Prenom</th>
		<th scope="col">Classe</th>
		<th scope="col">Temps par tour</th>
		<th scope="col">Temps Total</th>
		<th scope="col">Temps Moyen</th>
		<th scope="col">Tour numéro</th>
		
<?php


$result = $conn->query("SELECT Nom, Prenom, Classe, TableTempsTour.IdParticipant, TableTempsTour.IdCourse, 
AVG(tempsTour) AS tempsMoyen, 
SUM(tempsTour) AS tempsTotal,
(SELECT tempsTour FROM ParticipantTempsTour 
WHERE ParticipantTempsTour.IdCourse=TableTempsTour.IdCourse AND ParticipantTempsTour.IdParticipant=TableTempsTour.IdParticipant ORDER BY numTour DESC LIMIT 1) AS tempsTour,
MAX(numTour) AS numTour
FROM
(
SELECT IdParticipant, IdCourse, tempsTour, numTour FROM ParticipantTempsTour
WHERE IdCourse = (SELECT IdCourse FROM CourseActuelle LIMIT 1)

) AS TableTempsTour
INNER JOIN Utilisateur NATURAL JOIN Participant ON Participant.IdParticipant = TableTempsTour.IdParticipant
GROUP BY IdParticipant, IdCourse 
ORDER BY numTour DESC , tempsTotal ASC ") ;

//$resu = $conn->query("SELECT IdParticipant, IdCourse, AVG(tempsTour) AS tempsMoyen, SUM(tempsTour) AS tempsTotal FROM ParticipantTempsTour GROUP BY IdParticipant, IdCourse  ");
//SELECT Nom, Prenom, Classe, IdCourse, AVG(tempsTour) AS tempsMoyen, SUM(tempsTour) AS tempsTotal FROM ParticipantTempsTour INNER JOIN Utilisateur ON Utilisateur.IdUtilisateur = ParticipantTempsTour.IdParticipant WHERE IdCourse = (SELECT IdCourse FROM CourseActuelle LIMIT 1) GROUP BY IdParticipant, IdCourse

//---------------------------------------------------------Tableau -------------------------------------------------------------//



$classement=1;
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) 
	
	{
      
		echo "<tr>";
		echo "<td>" .$classement++. "</td>" ;
		echo "<td>" .$row['Nom']."</td>" ;
		echo "<td>".$row['Prenom']."</td>";
		echo "<td>".$row['Classe']."</td>";
		echo "<td>".(empty($row['tempsTour']) ? "0" : $row['tempsTour'])."</td>";
		echo "<td>".$row['tempsTotal']. "</td>";
		echo "<td>".$row['tempsMoyen']. "</td>";
		echo "<td>".$row['numTour']. "</td>";
		echo "</tr>";
	
		
	}
}

?>

</table>
</div>
</gauche>




<div class="droite">


	<table class="table table-striped table-dark">
	<th scope="col">Nom de la course</th>
	<th scope="col">Date de la course</th>

<?php 
$result = $conn->query("SELECT Nom, Date FROM Course ORDER BY Date ASC Limit 1 " );
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {

		echo "<tr>";
	    echo "<td>".$row['Nom']."</td>";
	    echo "<td>" .$row['Date']."</td>" ;
		echo "</tr>";
	}
}	
?>

</table>
</div>
</div>

<style>
	.droite
	{
		float:right;
		padding-right: 1%;
		padding-top: 4%;
	
	}

	.gauche
	{
		float: left;
		margin: 0 auto;
	   display:block;
	   width:1100px;
	   height:700px;
	   padding-top: 2%;
	   padding-left:1%;
		
		
	}
</style>



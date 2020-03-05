<?php 

$conn = new mysqli('localhost', 'root', 'root', 'Projet_Cross');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
?>
<div id = 'tab'>
<center>
<table>
    
	<td>Nom</td>
	<td>Prenom</td>
	<td>Classe</td>
	<td>Temps par tour</td>
	
<?php
;

$result = $conn->query("SELECT * FROM Utilisateur NATURAL JOIN Participant INNER JOIN ParticipantTempsTour ON ParticipantTempsTour.IdParticipant = Participant.IdUtilisateur  ");

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" .$row['Nom']."</td>" ;
		echo "<td>".$row['Prenom']."</td>";
		echo "<td>".$row['Classe']."</td>";
		echo "<td>".$row['tempsTour']."</td>";
		echo "</tr>";
	
		
	}
}
?>
</table>
</center>
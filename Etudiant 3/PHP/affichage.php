
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="fonction.js"></script>
		
	</head>
	<body>
<?php
	
 
  $bdd = new PDO ('mysql:host = 192.168.65.217;dbname=Projet_Cross;charset=utf8','root','root');
    


    ?> 

<div id = 'tab'>

        <table>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Classe</td>
     
<?php
    $result = $bdd->query("SELECT * FROM Utilisateur ");
    while($donnee = $result ->fetch())
    {
        echo "</tr>";
        echo "<td>".$donnee['Nom']."</td>";
        echo "<td>".$donnee['Prenom']."</td>";
        echo "<td>".$donnee['Classe']."</td>";
        echo "</tr>";
    }
?>
</table>
</div>
</body>
</html>
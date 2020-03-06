

<?php
	class bdd{
		private $bdd;
		private $host;
		private $dbname;
		private $user;
		private $mdp;


		function __construct bdd($host,$dbname,$user,$mdp){
			$this->host=$host;
			$this->dbname=$dbname;
			$this->user=$user;
			$this->mdp=$mdp;
		}
		public function connexion(){

			try{	
    				$bdd = new PDO("mysql:host=".$this->organisateur.";dbname=".$this->Projet_Cross.";charset=utf8', '".$this->cross."', '".$this->cross."'");
			   	}

			catch (Exception $e){

			        die('Erreur : ' . $e->getMessage());
				}
		}

	}
?>
<?php
include("Connexion.php");

class Stagiaire extends Connexion {

	private $_table = "stagiaire";

		public function verify_CIN_email($cin, $email)
		{
			$stagiaire = array();
			$sql = "SELECT * FROM {$this->_table} WHERE cin = '$cin'";
			$req = $this->getPDO()->query($sql);

			if ($data = $req->fetch())
				$query1 = true;
			else
				$query1 = false;

			$sql = "SELECT * FROM {$this->_table} WHERE email = '$email'";
			$req = $this->getPDO()->query($sql);
			
			if ($data = $req->fetch())
				$query2 = true;
			else
				$query2 = false;

			return ($query1 OR $query2);
		}

		public function inscription($cin, $nom, $prenom, $email, $mdp, $tel, $adresse, $nom_ecole, $niveau_etude, $domaine, $type_stage, $periode)
		{
			$sql="INSERT INTO {$this->_table} (cin, nom, prenom, email, mdp, tel, adresse, nom_ecole, niveau_etude, domaine, type_stage,periode) VALUES ('$cin', '$nom', '$prenom', '$email', '$mdp', '$tel', '$adresse', '$nom_ecole', '$niveau_etude', '$domaine', '$type_stage', '$periode')";
			$req=$this->getPDO()->query($sql);
		}

		public function valide($email,$mdp)
		{

			$stagiaire = array();
			$sql="SELECT * FROM {$this->_table} WHERE email='$email' AND mdp='$mdp'";
			$req=$this->getPDO()->query($sql);
			if($data = $req->fetch()){
				$stagiaire[] = $data; 
				return $stagiaire;
			}else{

				return false;
			}
		}

}



class Gerant extends Connexion {

	private $_table = "admin";


		public function add($id, $nom, $prenom, $email, $mdp, $tel, $adresse, $nom_ecole, $niveau_etude, $domaine, $type_stage, $periode)
		{
			$sql="INSERT INTO {$this->_table} (id, nom, prenom, email, mdp) VALUES ('$id', '$nom', '$prenom', '$email', '$mdp')";
			$req=$this->getPDO()->query($sql);
		}
    

		public function valide($email,$mdp)
		{

			$stagiaire = array();
			$sql="SELECT * FROM {$this->_table} WHERE email='$email' AND mdp='$mdp'";
			$req=$this->getPDO()->query($sql);
			if($data = $req->fetch()){
				$stagiaire[] = $data; 
				return $stagiaire;
			}else{

				return false;
			}
		}

}

?>
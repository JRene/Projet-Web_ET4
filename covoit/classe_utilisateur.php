<?php
	class Utilisateur {
		private $_id;
		private $_pseudo;
		private $_mail;
		private $_prenom;
		private $_nom;
		private $_annee;
		private $_specialite;
		private $_adresse;
		private $_urlPhoto;
		
		/*public function __construct($id, $mail, $prenom, $nom, $annee) {
			$this->_id = $id;
			$this->_mail = $mail;
			$this->_prenom = $prenom;
			$this->_nom = $nom;
			$this->_annee = $annee;
		}*/
		
		public function __construct($id, $mail, $pseudo, $prenom, $nom, $annee, $specialite, $adresse, $urlPhoto) {
			$this->_id = $id;
			$this->_pseudo = $pseudo;
			$this->_mail = $mail;
			$this->_prenom = $prenom;
			$this->_nom = $nom;
			$this->_annee = $annee;
			$this->_specialite = $specialite;
			$this->_adresse = $adresse;
			$this->_urlPhoto = $urlPhoto;
		}
		
		public function updatePseudo($pseudo) {			
			$conn = mysqli_connect("localhost", "root", "", "polycar");
			if (!$conn) {
				die("Connection failed : " . mysqli_connect_error());
			}
			else {
				mysqli_query($conn, "UPDATE Utilisateur SET pseudo = \"$pseudo\" WHERE idUtilisateur = \"$this->_id\";");
				$this->_pseudo = $pseudo;
				
				mysqli_close($conn);
			}
		}
		
		public function updateMail($mail) {
			$conn = mysqli_connect("localhost", "root", "", "polycar");
			if (!$conn) {
				die("Connection failed : " . mysqli_connect_error());
			}
			else {
				mysqli_query($conn, "UPDATE Utilisateur SET mail = \"$mail\" WHERE idUtilisateur = \"$this->_id\";");
				$this->_mail = $mail;
				
				mysqli_close($conn);
			}
		}
		
		public function updatePrenom($prenom) {
			$conn = mysqli_connect("localhost", "root", "", "polycar");
			if (!$conn) {
				die("Connection failed : " . mysqli_connect_error());
			}
			else {
				mysqli_query($conn, "UPDATE Utilisateur SET prenom = \"$prenom\" WHERE idUtilisateur = \"$this->_id\";");
				$this->_prenom = $prenom;
				
				mysqli_close($conn);
			}
		}
		
		public function updateNom($nom) {
			$conn = mysqli_connect("localhost", "root", "", "polycar");
			if (!$conn) {
				die("Connection failed : " . mysqli_connect_error());
			}
			else {
				mysqli_query($conn, "UPDATE Utilisateur SET nom = \"$nom\" WHERE idUtilisateur = \"$this->_id\";");
				$this->_nom = $nom;
				
				mysqli_close($conn);
			}
		}
		
		public function updateAnnee($annee) {
			$conn = mysqli_connect("localhost", "root", "", "polycar");
			if (!$conn) {
				die("Connection failed : " . mysqli_connect_error());
			}
			else {
				mysqli_query($conn, "UPDATE Utilisateur SET annee = \"$annee\" WHERE idUtilisateur = \"$this->_id\";");
				$this->_annee = $annee;
				
				mysqli_close($conn);
			}
		}
		
		public function updateSpecialite($specialite) {
			$conn = mysqli_connect("localhost", "root", "", "polycar");
			if (!$conn) {
				die("Connection failed : " . mysqli_connect_error());
			}
			else {
				mysqli_query($conn, "UPDATE Utilisateur SET specialite = \"$specialite\" WHERE idUtilisateur = \"$this->_id\";");
				$this->_specialite = $specialite;
				
				mysqli_close($conn);
			}
		}
		
		public function updateAdresse($adresse) {
			$conn = mysqli_connect("localhost", "root", "", "polycar");
			if (!$conn) {
				die("Connection failed : " . mysqli_connect_error());
			}
			else {
				mysqli_query($conn, "UPDATE Utilisateur SET mail = \"$adresse\" WHERE idUtilisateur = \"$this->_id\";");
				$this->_adresse = $adresse;
				
				mysqli_close($conn);
			}
		}
		
		public function updateUrlPhoto($urlPhoto) {
			$conn = mysqli_connect("localhost", "root", "", "polycar");
			if (!$conn) {
				die("Connection failed : " . mysqli_connect_error());
			}
			else {
				mysqli_query($conn, "UPDATE Utilisateur SET urlPhoto = \"$urlPhoto\" WHERE idUtilisateur = \"$this->_id\";");
				$this->_urlPhoto = $urlPhoto;
				
				mysqli_close($conn);
			}
		}
		
		public function getId() {
			return $this->_id;
		}
		
		public function getMail() {
			return $this->_mail;
		}
		
		public function getPseudo() {
			return $this->_pseudo;
		}
		
		public function getPrenom() {
			return $this->_prenom;
		}
		
		public function getNom() {
			return $this->_nom;
		}
		
		public function getAnnee() {
			return $this->_annee;
		}
		
		public function getSpecialite() {
			return $this->_specialite;
		}
		
		public function getAdresse() {
			return $this->_adresse;
		}
		
		public function getUrlPhoto() {
			return $this->_urlPhoto;
		}
	}
?>
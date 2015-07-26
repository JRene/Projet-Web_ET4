<?php
	class Voiture {
		private $_id;
		private $_marque;
		private $_nom;
		private $_couleur;
		private $_info;
		private $_nbPlaces;
		private $_urlPhoto;
		
		public function __construct($id, $marque, $nom, $couleur, $info, $nbPlaces, $urlPhoto) {
			$this->_id = $id;
			$this->_marque = $marque;
			$this->_nom = $nom;
			$this->_couleur = $couleur;
			$this->_info = $info;
			$this->_nbPlaces = $nbPlaces;
			$this->_urlPhoto = $urlPhoto;
		}
		
		public function getId() {
			return $this->_id;
		}
		
		public function getMarque() {
			return $this->_marque;
		}
		
		public function getNom() {
			return $this->_nom;
		}
		
		public function getCouleur() {
			return $this->_couleur;
		}
		
		public function getInfo() {
			return $this->_info;
		}
		
		public function getNbPlaces() {
			return $this->_nbPlaces;
		}
		
		public function getUrlPhoto() {
			return $this->_urlPhoto;
		}
	}
?>
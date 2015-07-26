<?php
	class Groupe {
		private $_id;
		private $_voiture;
		private $_nom;
		private $_info;
		private $_contribution;
		private $_depart;
		private $_arrivee;
		
		public function __construct($id, $voiture, $nom, $info, $contribution, $depart, $arrivee) {
			$this->_id = $id;
			$this->_voiture = $voiture;
			$this->_nom = $nom;
			$this->_info = $info;
			$this->_contribution = $contribution;
			$this->_depart = $depart;
			$this->_arrivee = $arrivee;
		}
		
		public function getId() {
			return $this->_id;
		}
		
		public function getVoiture() {
			return $this->_voiture;
		}
		
		public function getNom() {
			return $this->_nom; 
		}
		
		public function getInfo() {
			return $this->_info;
		}
		
		public function getContribution() {
			return $this->_contribution;
		}
		
		public function getDepart() {
			return $this->_depart;
		}
		
		public function getArrivee() {
			return $this->_arrivee;
		}
	}
?>
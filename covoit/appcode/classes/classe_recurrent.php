<?php
	class Recurrent {
		private $_id;
		private $_lundi;
		private $_mardi;
		private $_mercredi;
		private $_jeudi;
		private $_vendredi;
		private $_samedi;
		private $_dimanche;
		private $_heure;
		
		public function __construct($id, $lundi, $mardi, $mercredi, $jeudi, $vendredi, $samedi, $dimanche, $heure) {
			$this->_id = $id;
			$this->_lundi = $lundi;
			$this->_mardi = $mardi;
			$this->_mercredi = $mercredi;
			$this->_jeudi = $jeudi;
			$this->_vendredi = $vendredi;
			$this->_samedi = $samedi;
			$this->_dimanche = $dimanche;
			$this->_heure = $heure;
		}
		
		public function getId() {
			return $this->_id;
		}
		
		public function getLundi() {
			return $this->_lundi;
		}
		
		public function getMardi() {
			return $this->_mardi;
		}
		
		public function getMercredi() {
			return $this->_mercredi;
		}
		
		public function getJeudi() {
			return $this->_jeudi;
		}
		
		public function getVendredi() {
			return $this->_vendredi;
		}
		
		public function getSamedi() {
			return $this->_samedi;
		}
		
		public function getDimanche() {
			return $this->_dimanche;
		}
		
		public function getHeure() {
			return $this->_heure;
		}
	}
?>
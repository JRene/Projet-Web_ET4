<?php
	class Ponctuel {
		private $_id;
		private $_date;
		private $_heure;
		
		public function __construct($id, $date, $heure) {
			$this->_id = $id;
			$this->_date = $date;
			$this->_heure = $heure;
		}
		
		public function getId() {
			return $this->_id;
		}
		
		public function getDate() {
			return $this->_date;
		}
		
		public function getHeure() {
			return $this->_heure;
		}
	}
?>
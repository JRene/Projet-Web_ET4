<?php
	class Trajet {
		private $_id;
		private $_depart;
		private $_arrivee;
		private $_info;
		
		public function __construct($id, $depart, $arrivee, $info) {
			$this->_id = $id;
			$this->_depart = $depart;
			$this->_arrivee = $arrivee;
			$this->_info = $info;
		}
		
		public function getId() {
			return $this->_id;
		}
		
		public function getDepart() {
			return $this->_depart;
		}
		
		public function getArrivee() {
			return $this->_arrivee;
		}
		
		public function getInfo() {
			return $this->_info;
		}
	}
?>
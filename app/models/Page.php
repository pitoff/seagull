<?php 
	class Page{
		private $db;

		public function __construct(){
			$this->db = new Database();
		}

		public function getTrack($trackid){
			$this->db->query("SELECT * FROM shipment WHERE tracking_id = :trackid");

			$this->db->bind(':trackid', $trackid);

			$row = $this->db->single();
			return $row;
		}
	}
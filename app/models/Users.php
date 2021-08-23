<?php 
	class Users{
		private $db;

		public function __construct(){
			$this->db = new Database();
		}

		public function adminlogin($username, $password){
			$this->db->query("SELECT * FROM user WHERE username = :username");

			$this->db->bind(':username', $username);

			$row = $this->db->single();
			$password1 = $row->password;
			if(password_verify($password, $password1)){
				return $row;
			}else{
				return false;
			}
		}

		public function allshipments(){
			$this->db->query('SELECT * FROM shipment');
			$allshipment = $this->db->resultSet();
			return $allshipment;
		}

		public function getshipmentById($id){
			$this->db->query('SELECT * FROM shipment WHERE id = :id');
			$this->db->bind(':id', $id);

			$row = $this->db->single();
			return $row;
		}

		public function shipment($data){
			$this->db->query("INSERT INTO shipment (tracking_id, sender, receiver, qgoods, nature_of_goods, destination, current_location, status, ddate, adate) VALUES (:track_id, :sender, :receiver, :qgoods, :ngoods, :destination, :clocation, :status, :ddate, :adate)");

			$this->db->bind(':track_id', $data['track_id']);
			$this->db->bind(':sender', $data['sender']);
			$this->db->bind(':receiver', $data['receiver']);
			$this->db->bind(':qgoods', $data['qgoods']);
			$this->db->bind(':ngoods', $data['ngoods']);
			$this->db->bind(':destination', $data['destination']);
			$this->db->bind(':clocation', $data['clocation']);
			$this->db->bind(':status', $data['status']);
			$this->db->bind(':ddate', $data['ddate']);
			$this->db->bind(':adate', $data['adate']);

			if ($this->db->execute()) {
				return true;
			}else{
				return false;
			}
		}

		public function updateShipment($data){
			$this->db->query("UPDATE shipment SET tracking_id = :track_id, sender = :sender, receiver = :receiver, qgoods= :qgoods, nature_of_goods = :ngoods, destination = :destination, current_location = :clocation, status = :status, ddate = :ddate, adate= :adate WHERE id = :id");

			$this->db->bind(':id', $data['id']);
			$this->db->bind(':track_id', $data['track_id']);
			$this->db->bind(':sender', $data['sender']);
			$this->db->bind(':receiver', $data['receiver']);
			$this->db->bind(':qgoods', $data['qgoods']);
			$this->db->bind(':ngoods', $data['ngoods']);
			$this->db->bind(':destination', $data['destination']);
			$this->db->bind(':clocation', $data['clocation']);
			$this->db->bind(':status', $data['status']);
			$this->db->bind(':ddate', $data['ddate']);
			$this->db->bind(':adate', $data['adate']);

			if ($this->db->execute()) {
				return true;
			}else{
				return false;
			}
		}

		public function removeShipment($id){
			$this->db->query("DELETE FROM shipment WHERE id = :id");
			$this->db->bind(':id', $id);
			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}
	}

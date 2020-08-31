<?php 
	class User extends Controller{
		public function __construct(){

			$this->userModel = $this->model('Users');
		}

		public function adminlogin(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data = [
					'username' => trim($_POST['username']),
					'password' => trim($_POST['password']),
					'username_err' => '',
					'password_err' => ''
				];

				if (empty($data['username'])) {
					$data['username_err'] = 'username is empty'; 
				}
				if (empty($data['password'])) {
					$data['password_err'] = 'password must not be empty';
				}

				if (empty($data['username_err']) && empty($data['password_err'])) {
					$userLogIn = $this->userModel->adminlogin($data['username'], $data['password']);
					if ($userLogIn) {
						$this->createUserSession($userLogIn);
					}else{
						flash('message', 'Incorrect login details');
						$this->view('user/adminlogin', $data);
					}
				}else{
					$this->view('user/adminlogin', $data);
				}

			}else{
				$data = [
					'username' => '',
					'password' => '',
					'username_err' => '',
					'password_err' => ''
				];
				$this->view('user/adminlogin', $data);
			}
		}

		public function createUserSession($user){
			$_SESSION['id'] = $user->id;
			$_SESSION['username'] = $user->username;
			$_SESSION['role'] = $user->role;
			redirect('user/dashboard');
		}

		public function dashboard(){
			if (!isLoggedIn()) {
				redirect('user/adminlogin');
			}
			$shipment = $this->userModel->allshipments();
			$data=[
				'shipment' => $shipment
			];
			$this->view('user/dashboard', $data);
		}

		public function shipment(){
			$tracknum = '0123456789ABcdefGHijklMNopqrSTuvwxYZ';
			$result = 'SS-'.substr(str_shuffle($tracknum), 0, 9);
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data=[
					'track_id' => trim($_POST['track_id']),
					'sender' => trim($_POST['sender']),
					'receiver' => trim($_POST['receiver']),
					'qgoods' => trim($_POST['qgoods']),
					'ngoods' => trim($_POST['ngoods']),
					'destination' => trim($_POST['destination']),
					'clocation' => trim($_POST['clocation']),
					'status' => trim($_POST['status']),
					'ddate' => trim($_POST['ddate']),
					'adate' => trim($_POST['adate']),
					'track_id_err' => '',
					'sender_err' => '',
					'receiver_err' => '',
					'qgoods_err' => '',
					'ngoods_err' => '',
					'destination_err' => '',
					'clocation_err' => '',
					'status_err' => '',
					'ddate_err' => '',
					'adate_err' => ''
				];
					if (empty($data['sender'])) {
						$data['sender_err'] = 'sender is empty';
					}
					if (empty($data['receiver'])) {
						$data['receiver_err'] = 'receiver is empty';
					}
					if (empty($data['qgoods'])) {
						$data['qgoods_err'] = 'quantity is empty';
					}
					if (empty($data['ngoods'])) {
						$data['ngoods_err'] = 'input nature of goods';
					}
					if (empty($data['destination'])) {
						$data['destination_err'] = 'please input a destination';
					}
					if (empty($data['clocation'])) {
						$data['clocation_err'] = 'current location of goods';
					}
					if (empty($data['ddate'])) {
						$data['ddate_err'] = 'input delivery date';
					}
					if (empty($data['adate'])) {
						$data['adate_err'] = 'input arrival date';
					}
					if (empty($data['status'])) {
						$data['status_err'] = 'status is empty';
					}

					if (empty($data['sender_err']) && empty($data['receiver_err']) && empty($data['qgoods_err']) && empty($data['ngoods_err']) && empty($data['destination_err']) && empty($data['clocation_err']) && empty($data['status_err']) && empty($data['ddate_err']) && empty($data['adate_err'])) {

						if ($this->userModel->shipment($data)) {
							flash('message', 'shipment added');
							redirect('user/dashboard');
						}else{
							die('wrong address');
						}
						
					}else{
						$this->view('user/shipment', $data);
					}
			}else{
				$data = [
					'track_id' => $result,
					'sender' => '',
					'receiver' => '',
					'qgoods' => '',
					'ngoods' => '',
					'destination' => '',
					'clocation' => '',
					'status' => '',
					'ddate' => '',
					'adate' => '',
					'track_id_err' => '',
					'sender_err' => '',
					'receiver_err' => '',
					'qgoods_err' => '',
					'ngoods_err' => '',
					'destination_err' => '',
					'clocation_err' => '',
					'status_err' => '',
					'ddate_err' => '',
					'adate_err' => ''
				];
				$this->view('user/shipment', $data);
			}
		}

		public function update($id){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data=[
					'id' => $id,
					'track_id' => trim($_POST['track_id']),
					'sender' => trim($_POST['sender']),
					'receiver' => trim($_POST['receiver']),
					'qgoods' => trim($_POST['qgoods']),
					'ngoods' => trim($_POST['ngoods']),
					'destination' => trim($_POST['destination']),
					'clocation' => trim($_POST['clocation']),
					'status' => trim($_POST['status']),
					'ddate' => trim($_POST['ddate']),
					'adate' => trim($_POST['adate']),
					'track_id_err' => '',
					'sender_err' => '',
					'receiver_err' => '',
					'qgoods_err' => '',
					'ngoods_err' => '',
					'destination_err' => '',
					'clocation_err' => '',
					'status_err' => '',
					'ddate_err' => '',
					'adate_err' => ''
				];
					if (empty($data['sender'])) {
						$data['sender_err'] = 'sender is empty';
					}
					if (empty($data['receiver'])) {
						$data['receiver_err'] = 'receiver is empty';
					}
					if (empty($data['qgoods'])) {
						$data['qgoods_err'] = 'quantity is empty';
					}
					if (empty($data['ngoods'])) {
						$data['ngoods_err'] = 'input nature of goods';
					}
					if (empty($data['destination'])) {
						$data['destination_err'] = 'please input a destination';
					}
					if (empty($data['clocation'])) {
						$data['clocation_err'] = 'current location of goods';
					}
					if (empty($data['ddate'])) {
						$data['ddate_err'] = 'input delivery date';
					}
					if (empty($data['adate'])) {
						$data['adate_err'] = 'input arrival date';
					}
					if (empty($data['status'])) {
						$data['status_err'] = 'status is empty';
					}

					if (empty($data['sender_err']) && empty($data['receiver_err']) && empty($data['qgoods_err']) && empty($data['ngoods_err']) && empty($data['destination_err']) && empty($data['clocation_err']) && empty($data['status_err']) && empty($data['ddate_err']) && empty($data['adate_err'])) {

						if ($this->userModel->updateShipment($data)) {
							flash('message', 'shipment updated');
							redirect('user/dashboard');
						}else{
							die('wrong address');
						}
						
					}else{
						$this->view('user/update', $data);
					}
			}else{
				$user = $this->userModel->getshipmentById($id);
				$data = [
					'id' => $id,
					'track_id' => $user->tracking_id,
					'sender' => $user->sender,
					'receiver' => $user->receiver,
					'qgoods' => $user->qgoods,
					'ngoods' => $user->nature_of_goods,
					'destination' => $user->destination,
					'clocation' => $user->current_location,
					'status' => $user->status,
					'ddate' => $user->ddate,
					'adate' => $user->adate,
					'track_id_err' => '',
					'sender_err' => '',
					'receiver_err' => '',
					'qgoods_err' => '',
					'ngoods_err' => '',
					'destination_err' => '',
					'clocation_err' => '',
					'status_err' => '',
					'ddate_err' => '',
					'adate_err' => ''
				];
				$this->view('user/update', $data);
			}
		}
		
	}
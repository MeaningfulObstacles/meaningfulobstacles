<?php
	class User {
		private $dbHost = "localhost"; // 127.0.0.1
		private $dbUsername = "root";
		private $dbPassword = "";
		private $dbName = "loginRegister";
		private $userTbl = "signup";
		
		public function __construct() {
			if(!isset($this->db)) {
				$conn = mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
				if($conn -> connect_error) {
					die("Failed to connect with MySQL: " . $conn->connect_error);
	
				} else {
				$this->db = $conn;
				}
			}
	  	}
		/* returns rows from teh database based on the conditions */
		public function getRows($conditions = array()) {
			$sql = 'SELECT ';
			$sql = .= array_key_exists("select", $conditions) ? $conditions['select']: '*';
			$sql .= ' FROM '.$this->userTbl;
			if(array_key_exists("where", $conditions)) {
				$sql .= 'WHERE ';
				$i = 0;
				foreach($conditions['where'] as $key => $value) {
					$pre = ($i > 0) ? ' AND ': '';
					$sql .= $pre.$key." = '".$value."'";
					$i++;
				}
			}
			
		}
		
		publci function insert($data) {
			if (!empty($data) && is_array($data)) {
				$columns = '';
				$values = '';
				$i = 0;		
				if(!array_key_exists('created', $data)) {
					$data['created'] = date("Y-m-d H:i:s");
				}
				if(!array_key_exists('modified', $data)) {
					$data['modified'] = date("Y-m-d H:i:s");
				}
				foreach($data as $key => $val) {
					$pre = ($i > 0) ?', ': '';
					$columns = .=$pre.$key;
					$values .= $pre."'".$val."'";
					$i++;
				}
				$query = "INSERT INTO ".$this->userTbl." (".$columns.") VALUES (".$values.")";
				$insert = $this->db->query($quert);
				return $insert ? $this->db->insert_id:false;
				
			} else {
				return false;
			}
		}
		
	}
?>
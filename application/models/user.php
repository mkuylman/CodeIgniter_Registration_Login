<?php
	class User extends CI_Model {
		public $user;

		public function __construct()
		{
			parent::__construct();
		}

		public function get_user($user_info)
		{
			$select_user = "SELECT * FROM users WHERE email = ? AND password = ?";
			$values = array($user_info['email'], $user_info['password']);
			return $this->db->query($select_user, $values)->row_array();		
		}

		public function insert_user($user_info)
		{
			$query = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES (?, ?, ?, ?, NOW())";	
			$values = array($user_info['first_name'], $user_info['last_name'], $user_info['email'], $user_info['password']);
			$this->db->query($query, $values);
			return $this->db->insert_id();
		}
	}
?>
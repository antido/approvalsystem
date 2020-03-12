<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Model extends CI_Model {
	
	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->or_where('email_address', $username);
		$this->db->where('password', $password);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
}
?>
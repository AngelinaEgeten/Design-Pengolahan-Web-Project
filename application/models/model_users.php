<?php
class Model_users extends CI_Model 
{
	public function register_user($data) 
	{
		$this->db->set('nama',$data['nama']);
		$this->db->set('password',sha1($data['password']));
		$this->db->insert('siswa');
	}
	public function is_username_exists($nama) 
	{
		$this->db->where('nama', $nama);
		$result = $this->db->get('siswa');
		if ($result->num_rows() > 0) 
		{
			return TRUE;
		} 
		else 
		{
			return FALSE;
		}
	}
	public function login($data) 
	{
		$sql = "SELECT * FROM siswa WHERE nama = ? AND password = ?";
		$result = $this->db->query($sql,array($data['nama'],sha1($data['password'])));
		if ($result->num_rows() == 1) 
		{
			return TRUE;
		} 
		else 
		{
			return FALSE;
		}
	}
}
?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_users');
	}
	public function index()	
	{
		$this->load->view('view_index');		
	}
	public function signup() 
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nama', 'UserName', 'trim|required|alpha_numeric|min_length[6]|strtolower|xss_clean|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$this->form_validation->set_rules('passconf', 'Confirmation Password', 'required|matches[password]|xss_clean');
		
		if ($this->form_validation->run() == FALSE) 
		{	
			$this->load->view('view_signup');	
		} 
		else 
		{
			$data['nama'] = $this->input->post('nama');
			$data['password'] = $this->input->post('password');
			
			$this->model_users->register_user($data);
			$this->load->view('view_confirmation', $data);
		}
	}
	public function username_check($str) 
	{
		if ($this->model_users->is_username_exists($str)) 
		{
			$this->form_validation->set_message('username_check', 'UserName '.$str.' already existed.');
			return FALSE;
		} 
		else 
		{
			return TRUE;
		}
	}
	public function login() 
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nama', 'UserName', 'trim|required|alpha_numeric|min_length[6]|strtolower|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="error"><em>', '</em></span>');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('view_login');	
		} 
		else 
		{
			$check['nama'] = $this->input->post('nama');
			$check['password'] = $this->input->post('password');
			
			if ($this->model_users->login($check)) 
			{
				$array = array
				(
					'nama' => $check['nama'],
					'logged_in' => TRUE
				);
				$this->session->set_userdata($array);
				$this->viewAll();
				$this->viewIns();
			} 
			else 
			{
				$this->session->set_flashdata('error', '<div class="error">Your username or password is incorrect, please try again.</div>');
				$this->load->view('view_login');
			}
		}
	}
	public function logout() 
	{
		$this->session->unset_userdata(array('nama'=>'','logged_in'=>''));
		$this->session->sess_destroy();
		$this->session->set_flashdata('notice', '<div class="notice">You have logged out.</div>');
		redirect('blog/index');
	}
	public function viewAll() 
	{
		$a = $this->db->get('ukm');
		$data = array( 'rows' => $a->result() );
		$this->load->view('manage',$data);	
	}
	public function viewIns() 
	{
		$data['insertMode'] = true;
		$this->load->view('form1',$data);
	}
	public function viewUpd() 
	{
		$data['insertMode'] = true;
		$dat['id'] = $this->input->post('id');
		$a = $this->db->query('select * from ukm where id='.$dat['id'] );
		$a = $a->result();
		$data['row'] = $a[0];  
		$this->load->view('form1',$data);
	}
	public function viewDel() 
	{
		$data['insertMode'] = true;
		$data['deleteMode'] = true;
		$dat['id'] = $this->input->post('id');
		$a = $this->db->get('ukm', $dat );
		$a = $a->result();
		$data['row'] = $a[0];  
		$this->load->view('form1',$data);
	}
	
	public function insert() 
	{
		$ins['nama'] = $this->input->post('nama');
		$ins['ketua_ukm'] = $this->input->post('ketua_ukm');
		$this->db->insert('ukm',$ins);
		$this->viewAll(); 
	}
	public function update() 
	{    
		$id = $this->input->post('id');
		$upd['nama'] = $this->input->post('nama');
		$upd['ketua_ukm'] = $this->input->post('ketua_ukm');
		
		$this->db->where('id', $id);
		$this->db->update('ukm', $upd);
		
		$this->viewAll();    
	}
	public function delete() 
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('ukm');
		
		$this->viewAll();    
	}
}

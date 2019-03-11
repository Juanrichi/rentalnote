<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('admin/notelog/login', 'refresh');

	  }
	}

	public function index()
		{
			$data['transaksi'] = $this->db->query("select * from transaksi order by transaksi_id desc limit 8")->result();
			$data['kostumer'] = $this->db->query("select * from kostumer order by kostumer_id desc limit 8")->result();
			$data['mobil'] = $this->db->query("select * from mobil order by mobil_id desc limit 8")->result();

			$this->load->view('back/dashboard', $data);
		}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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
		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');
		$this->form_validation->set_rules('dari','Dari Tanggal','required');
		$this->form_validation->set_rules('sampai','Sampai Tanggal','required');

		if($this->form_validation->run() != false)
		{
			$data['laporan'] = $this->db->query("select * from transaksi,mobil,kostumer where transaksi_mobil=mobil_id and transaksi_kostumer=kostumer_id and date(transaksi_tgl) >= '$dari'")->result();

			$data['form_open'] = array(
			'data-parsley-validate novalidate' => '',
			);
			$this->load->view('back/laporan_filter',$data);
		}
    else
    {
			$data['form_open'] = array(
			'data-parsley-validate novalidate' => '',
			);
			$this->load->view('back/laporan', $data);
		}
	}
}

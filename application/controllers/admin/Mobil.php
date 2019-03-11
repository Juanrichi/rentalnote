<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

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
		$data['mobil'] = $this->m_rental->get_data('mobil')->result();
		$this->load->view('back/mobil', $data);
		//$this->load->view('back/mobil');
	}

	public function mobil_add()
	{
		$this->data['merek'] = array(
			'name' => 'merk',
			'id' => 'userName',
			'class' => 'form-control',
			'data-parsley-maxlength' => '14',
			'placeholder' => 'Enter Brand Car',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['plat'] = array(
			'name' => 'plat',
			'id' => 'userName',
			'class' => 'form-control',
			'parsley-trigger' => 'change',
			'placeholder' => 'Enter Code ',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['warna'] = array(
			'name' => 'warna',
			'id' => 'userName',
			'class' => 'form-control',
			'parsley-trigger' => 'change',
			'placeholder' => 'Enter Color or Mixed',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['tahun'] = array(
			'name' => 'tahun',
			'id' => 'userName',
			'class' => 'form-control',
			'parsley-trigger' => 'change',
			'placeholder' => 'Enter Production Car Year',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['status'] = array(
			'1' => 'Tersedia',
			'2' => 'Sedang dirental',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['opsional'] = array(
			'id' => 'exampleSelect1',
			'class' => 'form-control',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['form_open'] = array(
			'data-parsley-validate novalidate' => '',
		);
		$this->load->view('back/mobil_add', $this->data);
	}

	public function mobil_add_act()
	{
		$merk = $this->input->post('merk');
		$plat = $this->input->post('plat');
		$warna = $this->input->post('warna');
		$tahun = $this->input->post('tahun');
		$status = $this->input->post('status');
		$this->form_validation->set_rules('merk','Merk Mobil','required');
		$this->form_validation->set_rules('status','Status Mobil','required');

		if($this->form_validation->run() != false)
		{
			$data = array(
				'mobil_merek' => $merk,
				'mobil_plat' => $plat,
				'mobil_warna' => $warna,
				'mobil_tahun' => $tahun,
				'mobil_status' => $status
			);
			$this->m_rental->insert_data($data,'mobil');
			redirect(base_url().'admin/mobil');
		}
		else
		{
			$this->load->view('admin/mobil_add');
		}
	}

	public function mobil_edit($id)
	{
		$this->data['merek'] = array(
			'name' => 'merk',
			'id' => 'userName',
			'class' => 'form-control',
			'parsley-trigger' => 'change',
			'placeholder' => 'Enter First name',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['plat'] = array(
			'name' => 'plat',
			'id' => 'userName',
			'class' => 'form-control',
			'parsley-trigger' => 'change',
			'placeholder' => 'Enter First name',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['warna'] = array(
			'name' => 'warna',
			'id' => 'userName',
			'class' => 'form-control',
			'parsley-trigger' => 'change',
			'placeholder' => 'Enter First name',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['tahun'] = array(
			'name' => 'tahun',
			'id' => 'userName',
			'class' => 'form-control',
			'parsley-trigger' => 'change',
			'placeholder' => 'Enter First name',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['status'] = array(
			'1' => 'Tersedia',
			'2' => 'Sedang dirental',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['status'] = array(
			'1' => 'Tersedia',
			'2' => 'Sedang dirental',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['opsional'] = array(
			'id' => 'exampleSelect1',
			'class' => 'form-control',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['form_open'] = array(
			'data-parsley-validate novalidate' => '',
		);

		$where = array(
			'mobil_id' => $id
		);
		$this->data['mobil'] = $this->m_rental->edit_data($where,'mobil')->result();
		$this->load->view('back/mobil_edit', $this->data);
	}

	function mobil_update()
	{
		$id = $this->input->post('id');
		$merk = $this->input->post('merk');
		$plat = $this->input->post('plat');
		$warna = $this->input->post('warna');
		$tahun = $this->input->post('tahun');
		$status = $this->input->post('status');
		$this->form_validation->set_rules('merk','Merk Mobil','required');
		$this->form_validation->set_rules('status','Status Mobil','required');
		if($this->form_validation->run() != false)
		{
			$where = array(
				'mobil_id' => $id
			);
			$data = array(
				'mobil_merek' => $merk,
				'mobil_plat' => $plat,
				'mobil_warna' => $warna,
				'mobil_tahun' => $tahun,
				'mobil_status' => $status
			);
			$this->m_rental->update_data($where,$data,'mobil');
			redirect(base_url().'admin/mobil');
		}
		else
		{
			$where = array(
				'mobil_id' => $id
			);
			$data['mobil'] = $this->m_rental->edit_data($where,'mobil')->result();
			$this->load->view('admin/mobil_edit',$data);
		}
	}

	public function mobil_hapus($id)
	{
		$where = array(
			'mobil_id' => $id
		);
		$this->m_rental->delete_data($where,'mobil');
		redirect(base_url().'admin/mobil');
	}
}

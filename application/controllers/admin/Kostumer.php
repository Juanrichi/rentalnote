<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kostumer extends CI_Controller {

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
    $data['kostumer'] = $this->m_rental->get_data('kostumer')->result();
    $this->load->view('back/kostumer',$data);

  }

  public function kostumer_add()
  {
    $this->data['nama'] = array(
			'name' => 'nama',
			'id' => 'userName',
			'class' => 'form-control',
			'parsley-trigger' => 'change',
			'placeholder' => 'Enter name',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
    $this->data['alamat'] = array(
      'name' => 'alamat',
      'class' => 'form-control',
      'data-parsley-id' => '46',
      'placeholder' => 'Enter Adress',
      'required' => '',
      'type' => 'text',
      'rows' => '3',
      //'value' => $this->form_validation->set_value('first_name'),
    );
    $this->data['hp'] = array(
      'name' => 'hp',
      'class' => 'form-control',
      'data-parsley-type' => 'digits',
      'data-parsley-id' => '40',
      'placeholder' => 'Enter Phone Number',
      'required' => '',
      'type' => 'text',
      //'value' => $this->form_validation->set_value('first_name'),
    );
    $this->data['ktp'] = array(
      'name' => 'ktp',
      'class' => 'form-control',
      'data-parsley-type' => 'digits',
      'data-parsley-id' => '40',
			'data-parsley-maxlength' => '16',
			'data-parsley-minlength' => '16',
      'placeholder' => 'Enter Number Only',
      'required' => '',
      'type' => 'text',
      //'value' => $this->form_validation->set_value('first_name'),
    );
    $this->data['jk'] = array(
      'L' => 'Laki-laki',
      'P' => 'Perempuan',
    );
    $this->data['opsional'] = array(
      'id' => 'exampleSelect1',
      'class' => 'form-control',
    );
  $this->data['form_open'] = array(
    'data-parsley-validate novalidate' => '',
    );
	$this->load->view('back/kostumer_add', $this->data);
	}

	public function kostumer_add_act()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$hp = $this->input->post('hp');
		$ktp = $this->input->post('ktp');
		$this->form_validation->set_rules('nama','nama','required');

		if($this->form_validation->run() != false)
		{
			$data = array(
				'kostumer_nama' => $nama,
				'kostumer_alamat' => $alamat,
				'kostumer_jk' => $jk,
				'kostumer_hp' => $hp,
				'kostumer_ktp' => $ktp
			);
			$this->m_rental->insert_data($data,'kostumer');
			redirect(base_url().'admin/kostumer');
		}
		else
		{
			$this->load->view('admin/kostumer/kostumer_add');
		}
	}

	public function kostumer_edit($id)
	{
		$this->data['nama'] = array(
			'name' => 'nama',
			'id' => 'userName',
			'class' => 'form-control',
			'parsley-trigger' => 'change',
			'placeholder' => 'Enter name',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
    $this->data['alamat'] = array(
      'name' => 'alamat',
      'class' => 'form-control',
      'data-parsley-id' => '46',
      'placeholder' => 'Enter Adress',
      'required' => '',
      'type' => 'text',
      'rows' => '3',
      //'value' => $this->form_validation->set_value('first_name'),
    );
    $this->data['hp'] = array(
      'name' => 'hp',
      'class' => 'form-control',
      'data-parsley-type' => 'digits',
      'data-parsley-id' => '40',
      'placeholder' => 'Enter Phone Number',
      'required' => '',
      'type' => 'text',
      //'value' => $this->form_validation->set_value('first_name'),
    );
    $this->data['ktp'] = array(
      'name' => 'ktp',
      'class' => 'form-control',
      'data-parsley-type' => 'digits',
      'data-parsley-id' => '40',
			'data-parsley-maxlength' => '16',
			'data-parsley-minlength' => '16',
      'placeholder' => 'Enter Number Only',
      'required' => '',
      'type' => 'text',
      //'value' => $this->form_validation->set_value('first_name'),
    );
    $this->data['jk'] = array(
      'L' => 'Laki-laki',
      'P' => 'Perempuan',
    );
    $this->data['opsional'] = array(
      'id' => 'exampleSelect1',
      'class' => 'form-control',
    );
  	$this->data['form_open'] = array(
    'data-parsley-validate novalidate' => '',
    );

		$where = array(
			'kostumer_id' => $id
		);
		$this->data['kostumer'] = $this->m_rental->edit_data($where,'kostumer')->result();
		$this->load->view('back/kostumer_edit',$this->data);
	}

	public	function kostumer_update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$hp = $this->input->post('hp');
		$ktp = $this->input->post('ktp');
		$this->form_validation->set_rules('nama','nama','required');

		if($this->form_validation->run() != false)
		{
			$where = array(
				'kostumer_id' => $id
			);
			$data = array(
				'kostumer_nama' => $nama,
				'kostumer_alamat' => $alamat,
				'kostumer_jk' => $jk,
				'kostumer_hp' => $hp,
				'kostumer_ktp' => $ktp
			);
			$this->m_rental->update_data($where,$data,'kostumer');
			redirect(base_url().'admin/kostumer');
		}
		else
		{
			$where = array(
				'kostumer_id' => $id
			);
			$data['kostumer'] = $this->m_rental->edit_data($where,'kostumer')->result();
			$this->load->view('admin/kostumer/kostumer_edit',$data);
		}
	}

	public function kostumer_hapus($id)
	{
		$where = array(
			'kostumer_id' => $id
		);
		$this->m_rental->delete_data($where,'kostumer');
		redirect(base_url().'admin/kostumer');
	}
}

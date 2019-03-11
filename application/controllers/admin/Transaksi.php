<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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
    $data['transaksi'] = $this->db->query("select * from transaksi,mobil,kostumer where transaksi_mobil=mobil_id and transaksi_kostumer=kostumer_id")->result();
		$this->load->view('back/transaksi',$data);
  }

  public	function transaksi_add()
  {
    /*
    $this->data['nama'] = array(
			'name' => 'nama',
			'id' => 'userName',
			'class' => 'form-control',
			'parsley-trigger' => 'change',
			'placeholder' => 'Enter name',
			'required' => '',
			'type' => 'text',
			'value' => $this->form_validation->set_value('first_name'),
		);
    $this->data['kostumer'] = array(
      'value' => 'Pilih',
    );
    $this->data['opsional'] = array(
      'id' => 'exampleSelect1',
      'class' => 'form-control',
    );
		*/
		$this->data['harga'] = array(
			'name' => 'harga',
			'class' => 'form-control',
			'data-parsley-type' => 'digits',
			'data-parsley-id' => '40',
			'data-parsley-maxlength' => '16',
			'data-parsley-minlength' => '2',
			'placeholder' => 'Enter Number Only',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['denda'] = array(
			'name' => 'denda',
			'class' => 'form-control',
			'data-parsley-type' => 'digits',
			'data-parsley-id' => '40',
			'data-parsley-maxlength' => '16',
			'data-parsley-minlength' => '2',
			'placeholder' => 'Enter Number Only',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
    $this->data['form_open'] = array(
      'data-parsley-validate novalidate' => '',
      );
		$w = array('mobil_status'=>'1');
		$this->data['mobil'] = $this->m_rental->edit_data($w,'mobil')->result();
    $this->data['kostumer'] = $this->m_rental->get_data('kostumer')->result();
		$this->load->view('back/transaksi_add',$this->data);
  }

	public function transaksi_add_act()
	{
		$data['harga'] = array(
			'name' => 'harga',
			'class' => 'form-control',
			'data-parsley-type' => 'digits',
			'data-parsley-id' => '40',
			'data-parsley-maxlength' => '16',
			'data-parsley-minlength' => '2',
			'placeholder' => 'Enter Number Only',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$data['denda'] = array(
			'name' => 'denda',
			'class' => 'form-control',
			'data-parsley-type' => 'digits',
			'data-parsley-id' => '40',
			'data-parsley-maxlength' => '16',
			'data-parsley-minlength' => '2',
			'placeholder' => 'Enter Number Only',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$data['form_open'] = array(
			'data-parsley-validate novalidate' => '',
			);

		$kostumer = $this->input->post('kostumer');
		$mobil = $this->input->post('mobil');
		$tgl_pinjam = $this->input->post('tgl_pinjam');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$harga = $this->input->post('harga');
		$denda = $this->input->post('denda');
		$tgl_pinjam = strtotime($tgl_pinjam);
		$tgl_kembali = strtotime($tgl_kembali);


		$this->form_validation->set_rules('kostumer','Kostumer','required');
		$this->form_validation->set_rules('mobil','Mobil','required');
		$this->form_validation->set_rules('tgl_pinjam','Tanggal Pinjam','required');
		$this->form_validation->set_rules('tgl_kembali','Tanggal Kembali','required');
		$this->form_validation->set_rules('harga','Harga','required');
		$this->form_validation->set_rules('denda','Denda','required');


		if($this->form_validation->run() != false)
		{

			$data = array(
				'transaksi_karyawan' => $this->ion_auth->get_user_id(),
				'transaksi_kostumer' => $kostumer,
				'transaksi_mobil' => $mobil,
				'transaksi_tgl_pinjam' => date('Y-m-d', $tgl_pinjam),
				'transaksi_tgl_kembali' => date('Y-m-d', $tgl_kembali),
				'transaksi_harga' => $harga,
				'transaksi_denda' => $denda,
				'transaksi_tgl' => date('Y-m-d')
			);

			$this->m_rental->insert_data($data,'transaksi');

			// update status mobil yg di pinjam
			$d = array(
				'mobil_status' => '2'
			);
			$w = array(
				'mobil_id' => $mobil
			);
			$this->m_rental->update_data($w,$d,'mobil');
			redirect(base_url().'admin/transaksi');
		}
		else
		{
			$w = array('mobil_status'=>'1');
			$data['mobil'] = $this->m_rental->edit_data($w,'mobil')->result();
			$data['kostumer'] = $this->m_rental->get_data('kostumer')->result();
			$this->load->view('back/transaksi_add',$data);
		}
	}

	public function transaksi_hapus($id)
	{
		$w = array(
			'transaksi_id' => $id
		);
		$data = $this->m_rental->edit_data($w,'transaksi')->row();

		$ww = array(
			'mobil_id' => $data->transaksi_mobil
		);
		$data2 = array(
			'mobil_status' => '1'
		);
		$this->m_rental->update_data($ww,$data2,'mobil');

		$this->m_rental->delete_data($w,'transaksi');
		redirect(base_url().'admin/transaksi');
	}

	public function transaksi_selesai($id)
	{
		$this->data['mobil'] = $this->m_rental->get_data('mobil')->result();
		$this->data['kostumer'] = $this->m_rental->get_data('kostumer')->result();
		$this->data['transaksi'] = $this->db->query("select * from transaksi,mobil,kostumer where transaksi_mobil=mobil_id and transaksi_kostumer=kostumer_id and transaksi_id='$id'")->result();
		$this->data['harga'] = array(
			'name' => 'harga',
			'class' => 'form-control',
			'disabled' => '',
			'data-parsley-type' => 'digits',
			'data-parsley-id' => '40',
			'data-parsley-maxlength' => '16',
			'data-parsley-minlength' => '2',
			'placeholder' => 'Enter Number Only',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['denda'] = array(
			'name' => 'denda',
			'disabled' => '',
			'class' => 'form-control',
			'data-parsley-type' => 'digits',
			'data-parsley-id' => '40',
			'data-parsley-maxlength' => '16',
			'data-parsley-minlength' => '2',
			'placeholder' => 'Enter Number Only',
			'required' => '',
			'type' => 'text',
			//'value' => $this->form_validation->set_value('first_name'),
		);
		$this->data['form_open'] = array(
			'data-parsley-validate novalidate' => '',
			);
		$this->load->view('back/transaksi_selesai',$this->data);
	}

	public function transaksi_selesai_act(){
		$id = $this->input->post('id');
		$tgl_dikembalikan = $this->input->post('tgl_dikembalikan');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$mobil = $this->input->post('mobil');
		$denda = $this->input->post('denda');


		$this->form_validation->set_rules('tgl_dikembalikan','Tanggal Di Kembalikan','required');

		if($this->form_validation->run() != false){
			// menghitung selisih hari
			$batas_kembali = strtotime($tgl_kembali);
			$dikembalikan = strtotime($tgl_dikembalikan);
			$selisih = abs(($batas_kembali - $dikembalikan)/(60*60*24));
			$total_denda = $denda*$selisih;

			// update status transaksi
			$tgl_dikembalikan = strtotime($tgl_dikembalikan);
			$data = array(
				'transaksi_tgldikembalikan' => date('Y-m-d',$tgl_dikembalikan),
				'transaksi_status' => '1',
				'transaksi_totaldenda' => $total_denda
			);
			$w = array(
				'transaksi_id' => $id
			);

			$this->m_rental->update_data($w,$data,'transaksi');

			// update status mobil
			$data2 = array(
				'mobil_status' => '1'
			);
			$w2 = array(
				'mobil_id' => $mobil
			);

			$this->m_rental->update_data($w2,$data2,'mobil');
			redirect(base_url().'admin/transaksi');
		}
		else
		{
			$data['mobil'] = $this->m_rental->get_data('mobil')->result();
			$data['kostumer'] = $this->m_rental->get_data('kostumer')->result();
			$data['transaksi'] = $this->db->query("select * from transaksi,mobil,kostumer where transaksi_mobil=mobil_id and transaksi_kostumer=kostumer_id and transaksi_id='$id'")->result();
			$this->load->view('back/transaksi_selesai',$data);
		}
	}

}

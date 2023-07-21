<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dt_user extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->model('m_pengguna');
			$this->load->model('m_user');
			
		}
	public function index() {
		$this->model_squrity->getsqurity();
		$data['isi'] = 'content/tampil_user';
		$this->load->view('pengguna', $data);
	}
	function data_user(){
		$this->model_squrity->getsqurity();
		$data=$this->m_user->user_list();
		echo json_encode($data);

	}
	function simpan_pengguna(){
		$this->model_squrity->getsqurity();
		$username = $this->input->post('username');
		$pertanyaan = $this->input->post('pertanyaan');
		$tgl = $this->input->post('tgl');
		$data = $this->m_pengguna->smpn_m_pengguna($username,$pertanyaan,$tgl);
		echo json_encode($data);
	}
	function hapus(){
		$this->model_squrity->getsqurity();
			$id_pertanyaan=$this->input->post('id_pertanyaan');
			$data=$this->m_pengguna->hapus($id_pertanyaan);
			echo json_encode($data);
		}
	 function get_pengguna(){
	 	$this->model_squrity->getsqurity();
		$id=$this->input->get('id');
		$data=$this->m_pengguna->get_barang_by_kode($id);
		echo json_encode($data);
	}
	function update(){
		$this->model_squrity->getsqurity();
		$username=$this->input->post('username');
		$pertanyaan=$this->input->post('pertanyaan');
		$tgl=$this->input->post('tgl');		
		$data=$this->m_pengguna->update($username,$pertanyaan,$tgl);
		echo json_encode($data);
	}	
	
}

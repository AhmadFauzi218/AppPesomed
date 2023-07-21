<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dt_table extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->model('m_anggota');
			
		}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->model_squrity->getsqurity();
		$data['isi'] = 'ctAnggota/tampil_table';
		$this->load->view('anggota', $data);
	}

	function data_table(){
		$this->model_squrity->getsqurity();
		$data=$this->m_anggota->table_list();
		echo json_encode($data);
	}

	function hapus_jawaban(){
		$this->model_squrity->getsqurity();
			$id=$this->input->post('id');
			$data=$this->m_anggota->hapus_jawaban($id);
			echo json_encode($data);
		} 	 		
}

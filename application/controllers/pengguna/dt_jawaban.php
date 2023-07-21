<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dt_jawaban extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->model('m_pengguna');
			
		}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->model_squrity->getsqurity();
		$data['isi'] = 'content/tampil_jawaban';
		$this->load->view('pengguna', $data);
	}
	function data_jawaban(){
		$this->model_squrity->getsqurity();
		$data=$this->m_pengguna->jawaban_list();
		echo json_encode($data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->model('m_user');
			
		}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->model_squrity->getsqurity();
		$data['isi'] = 'ctKetua/v_user';
		$this->load->view('ketua', $data);
	}
	function data_user(){
		$this->model_squrity->getsqurity();
		$data=$this->m_user->user_list();
		echo json_encode($data);

	}
	function hapus(){
		$this->model_squrity->getsqurity();
			$id=$this->input->post('id');
			$data=$this->m_user->hapus_user($id);
			echo json_encode($data);
		}
	function simpan_user(){
		$this->model_squrity->getsqurity();
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$skpd = $this->input->post('skpd');
		$email = $this->input->post('email');
		$no_telpn = $this->input->post('no_telpn');
		$level = $this->input->post('level');
		$data = $this->m_user->smpn_m_user($username,$password,$skpd,$email,$no_telpn,$level);
		echo json_encode($data);
	}	
	
}

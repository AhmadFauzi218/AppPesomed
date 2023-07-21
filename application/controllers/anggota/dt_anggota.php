<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dt_anggota extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->model('m_anggota');
			
		}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->model_squrity->getsqurity();
		$data['isi'] = 'ctAnggota/tampil_database';
		$this->load->view('anggota', $data);
	}
	function data_anggota(){
		$this->model_squrity->getsqurity();
		$data=$this->m_anggota->barang_list();
		echo json_encode($data);
	}

	function data_table(){
		$this->model_squrity->getsqurity();
		$data=$this->m_anggota->data_table();
		echo json_encode($data);
	}
	 function get_anggota(){
	 	$this->model_squrity->getsqurity();
		$id_pertanyaan=$this->input->get('id_pertanyaan');
		$data=$this->m_anggota->get_barang_by_kode($id_pertanyaan);
		echo json_encode($data);
	}
// function update(){
// 		$this->model_squrity->getsqurity();
// 		$kode=$this->input->post('kode');
// 		$nama=$this->input->post('nama');
// 		$skpd=$this->input->post('skpd');
// 		$no_telp=$this->input->post('no_telp');		
// 		$email=$this->input->post('email');
// 		$pertanyaan=$this->input->post('pertanyaan');
// 		$jawaban_anggota=$this->input->post('jawaban_anggota');
// 		$data=$this->m_anggota->update($kode,$nama,$skpd,$no_telp,$email,$pertanyaan,$jawaban_anggota);
// 		echo json_encode($data);
// 	}	
	
	function simpan_anggota(){
		$this->model_squrity->getsqurity();
		$username = $this->input->post('username');
		$id_pertanyaan = $this->input->post('id_pertanyaan');
		$jawaban = $this->input->post('jawaban');
		$level = $this->input->post('level');
		$data = $this->m_anggota->smpn_m_anggota($username,$id_pertanyaan,$jawaban,$level);
		echo json_encode($data);
	}
	
	function hapus_jawaban(){
		$this->model_squrity->getsqurity();
			$id=$this->input->post('id');
			$data=$this->m_anggota->hapus_jawaban($id);
			echo json_encode($data);
		}		
}

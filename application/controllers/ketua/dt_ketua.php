<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dt_ketua extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->model('m_ketua');
			
		}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->model_squrity->getsqurity();
		$data['isi'] = 'ctKetua/tampil_databases';
		$this->load->view('ketua', $data);
	}
	 function get_ketua(){
	 	$this->model_squrity->getsqurity();
		$kode=$this->input->get('kode');
		$data=$this->m_ketua->get_barang_by_kode($kode);
		echo json_encode($data);
	}
	function data_ketua(){
		$this->model_squrity->getsqurity();
		$data=$this->m_ketua->barang_list();
		echo json_encode($data);

	}
	function update(){
		$this->model_squrity->getsqurity();		
		$kode=$this->input->post('kode');
		$nama=$this->input->post('nama');
		$skpd=$this->input->post('skpd');
		$no_telp=$this->input->post('no_telp');		
		$email=$this->input->post('email');
		$pertanyaan=$this->input->post('pertanyaan');
		$jawaban_anggota=$this->input->post('jawaban_anggota');
		$jawaban_ketua=$this->input->post('jawaban_ketua');
		$data=$this->m_ketua->update($kode,$nama,$skpd,$no_telp,$email,$pertanyaan,$jawaban_anggota,$jawaban_ketua);
		echo json_encode($data);
	}	
	function hapus(){
		$this->model_squrity->getsqurity();
			$id_pertanyaan=$this->input->post('id_pertanyaan');
			$data=$this->m_ketua->hapus($id_pertanyaan);
			echo json_encode($data);
		}
	

	function hapus_jawaban(){
		$this->model_squrity->getsqurity();
			$id=$this->input->post('id');
			$data=$this->m_ketua->hapus_jawaban($id);
			echo json_encode($data);
		}
}

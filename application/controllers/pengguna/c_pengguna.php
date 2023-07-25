<?php

class C_pengguna extends CI_Controller {

	 function __construct() {
		parent::__construct();
		$this->load->model('model_user');
		$this->load->model('m_pengguna');
		if ($this->session->userdata('username')=="") {
			redirect('autch');
		}
	}

	public function index() {

		$data['username'] = $this->session->userdata('username');
		   $data = [
            'title' => 'Grafik Data',   // Sebagai Title dari halaman
            'nama' => $this->m_pengguna->get_nama()
        ];
           $data['nume_of_time']=$this->m_pengguna->hitung_pengguna(); 
		$data['isi'] = 'content/tampil_dashboard';
		$this->load->view('pengguna', $data);
		$this->model_squrity->getsqurity();
	}
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		redirect('autch');
	}
	public function data_grafik()
    {
        $fd = $this->filter();
        $filtering = $fd['filter'];
        $grafik = $this->m_pengguna->data_grafik($filtering);
        echo $data = json_encode($grafik);
    }
    public function data_grafik_stack()
    {
        $get_kategori = $this->m_pengguna->get_kategori();
        $data = [];
        foreach ($get_kategori as $kategori) {
            $grafik = $this->m_pengguna->data_grafik_stack($kategori->kategori);
            array_push($data, $grafik);
        }
        echo $data = json_encode($data);
    }
    private function filter()
    {
        $filter_nama = $this->input->post('filter_nama');
        if ($filter_nama != '') {
            $filter_nama = ['username' => $filter_nama];
        } else {
            $filter_nama = [];
        }
        return ['filter' => $filter_nama];
    }

     function get_pengguna(){
	 	$this->model_squrity->getsqurity();
		$id_pertanyaan=$this->input->get('id_pertanyaan');
		$data=$this->m_pengguna->get_barang_by_kode($id_pertanyaan);
		echo json_encode($data);
	}
}
?>

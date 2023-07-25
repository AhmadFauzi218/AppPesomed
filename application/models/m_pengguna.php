<?php
class M_pengguna extends CI_Model{
    
 function barang_list(){
    $uname = $this->session->userdata('username');
        $hasil=$this->db->query("SELECT * FROM pertanyaan WHERE username='{$uname}'");
        return $hasil->result();
    }
   function smpn_m_pengguna($username,$pertanyaan,$tgl){
        $hasil = $this->db->query("INSERT INTO pertanyaan (username,pertanyaan,tgl) VALUES ('$username','$pertanyaan','$tgl')");
        return $hasil;
    }

    function get_barang_by_kode($id_pertanyaan){
        $hsl=$this->db->query("SELECT * FROM pertanyaan WHERE id_pertanyaan='$id_pertanyaan'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_pertanyaan' => $data->id_pertanyaan,
                    'pertanyaan' => $data->pertanyaan,
                    'tgl' => $data->tgl,

                    );
            }
        }
        return $hasil;
    }
    function hapus($id_pertanyaan){
            $hasil=$this->db->query("DELETE FROM pertanyaan WHERE id_pertanyaan='$id_pertanyaan'");
            return $hasil;
        }
       
     function jawaban_list(){
        $hasil=$this->db->query("SELECT * FROM pertanyaan a INNER JOIN jawaban b ON a.id_pertanyaan=b.id_pertanyaan ORDER BY a.id_pertanyaan ASC");
        return $hasil->result();
    }
    public function get_nama()
    {
     $hasil=$this->db->query("SELECT a.username,a.jawaban,a.id_pertanyaan,b.username,c.id_pertanyaan,c.pertanyaan FROM jawaban a INNER JOIN user b ON a.username=b.username INNER JOIN pertanyaan c ON c.id_pertanyaan=a.id_pertanyaan");
        return $hasil->result();   
    }
    public function data_grafik($filter)
    {
        $this->db->select('count(*) as data, username');
        $this->db->from('jawaban');
        $this->db->where($filter);
        $this->db->group_by('id_pertanyaan');
        return $this->db->get()->result();
    }
    public function get_kategori()
    {
        $this->db->select('distinct(username)');
        return $this->db->get('jawaban')->result();
    }
    public function data_grafik_stack($kategori)
    {
        $this->db->select("'$kategori' as id_pertanyaan, (SELECT count('*') from jawaban where created_by = 'Heru' and kategori ='$kategori') as data_heru, (SELECT count('*') from tbl_contoh where created_by = 'Maulana' and kategori ='$kategori') as data_maulana, (SELECT count('*') from tbl_contoh where kategori ='$kategori') as total");
        $this->db->from('tbl_contoh');
        $this->db->limit(1);
        return $this->db->get()->result();
    }

    public function hitung_pengguna(){
$query = $this->db->query("SELECT COUNT('id') FROM user");
    // print_r($query->result());
    return $query->result();
}

}

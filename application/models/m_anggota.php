<?php
class M_anggota extends CI_Model{
    
 function barang_list(){
        $hasil=$this->db->query("SELECT * FROM pertanyaan");
        return $hasil->result();
}
 function table_list(){
    $uname = $this->session->userdata('username');
        $hasil=$this->db->query("SELECT * FROM pertanyaan a INNER JOIN jawaban b ON a.id_pertanyaan=b.id_pertanyaan");
        return $hasil->result();
}

function smpn_m_anggota($username,$id_pertanyaan,$jawaban,$level){
        $hasil = $this->db->query("INSERT INTO jawaban (username,id_pertanyaan,jawaban,level) VALUES ('$username','$id_pertanyaan','$jawaban','$level')");
        return $hasil;
    }
    function update($kode,$nama,$skpd,$no_telp,$email,$pertanyaan,$jawaban_anggota){
        $hasil = $this->db->query("UPDATE tb_pengguna SET nama='$nama',skpd='$skpd',no_telp='$no_telp',email='$email',pertanyaan='$pertanyaan' ,jawaban_anggota='$jawaban_anggota'WHERE kode='$kode'");
        return $hasil;
    }
    function get_barang_by_kode($id_pertanyaan){
        $hsl=$this->db->query("SELECT * FROM pertanyaan WHERE id_pertanyaan='$id_pertanyaan'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_pertanyaan' => $data->id_pertanyaan,
                    'username' => $data->username,
                    'pertanyaan' => $data->pertanyaan,
                    'tgl' => $data->tgl,

                    );
            }
        }
        return $hasil;
    }
     function hapus_jawaban($id){
            $hasil=$this->db->query("DELETE FROM jawaban WHERE id='$id'");
            return $hasil;
        }
}
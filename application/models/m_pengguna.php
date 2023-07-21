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
    function hapus($id_pertanyaan){
            $hasil=$this->db->query("DELETE FROM pertanyaan WHERE id_pertanyaan='$id_pertanyaan'");
            return $hasil;
        }
       
     function jawaban_list(){
        $hasil=$this->db->query("SELECT * FROM pertanyaan a INNER JOIN jawaban b ON a.id_pertanyaan=b.id_pertanyaan ORDER BY a.id_pertanyaan ASC");
        return $hasil->result();
    }

}

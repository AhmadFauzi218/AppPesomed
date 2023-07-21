<?php
class M_user extends CI_Model{
    
 function user_list(){
        $hasil=$this->db->query("SELECT * FROM user where level='anggota'");
        return $hasil->result();
    }
function hapus_user($id){
            $hasil=$this->db->query("DELETE FROM user WHERE id='$id'");
            return $hasil;
        }
     function smpn_m_user($username,$password,$skpd,$email,$no_telpn,$level){
        $hasil = $this->db->query("INSERT INTO user (username,password,skpd,email,no_telpn,level) VALUES ('$username','$password','$skpd','$email','$no_telpn','$level')");
        return $hasil;
    }

}

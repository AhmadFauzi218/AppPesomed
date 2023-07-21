<?php

class Member extends CI_Model {

    //   function get_barang_by_kode($id){
    //     $hsl=$this->db->query("SELECT * FROM user WHERE id='$id'");
    //     if($hsl->num_rows()>0){
    //         foreach ($hsl->result() as $data) {
    //             $hasil=array(
    //                 'id' => $data->id,
    //                 'username' => $data->username,
    //                 'password' => $data->password,
    //                 'skpd' => $data->skpd,
    //                 'email' => $data->email,
    //                 'no_telpn' => $data->no_telpn,
    //                 'level' => $data->level,
    //                 );
    //         }
    //     }
    //     return $hasil;
    // }
    public function getdata($key){
    $this->db->where('id',$key);
    $hasil = $this->db->get('user');
    return $hasil;
  }
    public function getupdate($key,$data){
      $this->db->where('id',$key);
      $this->db->update('user',$data);
    }
}



?>

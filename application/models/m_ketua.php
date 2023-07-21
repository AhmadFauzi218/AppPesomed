<?php
class M_ketua extends CI_Model{
    
 function barang_list(){
        $hasil=$this->db->query("SELECT * FROM pertanyaan");
        return $hasil->result();
    }
    function delete($id){
        $this->db->where("id",$id);
        $this->db->delete("tb_pengguna");
    }
    function hapus($id_pertanyaan){
            $hasil=$this->db->query("DELETE FROM pertanyaan WHERE id_pertanyaan='$id_pertanyaan'");
            return $hasil;
        }

        function get_barang_by_kode($kode){
        $hsl=$this->db->query("SELECT * FROM tb_pengguna WHERE kode='$kode'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'kode' => $data->kode,
                    'nama' => $data->nama,
                    'skpd' => $data->skpd,
                    'no_telp' => $data->no_telp,
                    'email' => $data->email,
                    'pertanyaan' => $data->pertanyaan,
                    'jawaban_anggota' => $data->jawaban_anggota,
                    'jawaban_ketua' => $data->jawaban_ketua,
                    );
            }
        }
        return $hasil;
    }
 function update($kode,$nama,$skpd,$no_telp,$email,$pertanyaan,$jawaban_anggota,$jawaban_ketua){
        $hasil = $this->db->query("UPDATE tb_pengguna SET nama='$nama',skpd='$skpd',no_telp='$no_telp',email='$email',pertanyaan='$pertanyaan' ,jawaban_anggota='$jawaban_anggota',jawaban_ketua='$jawaban_ketua' WHERE kode='$kode'");
        return $hasil;
    }

 function user_list(){
        $hasil=$this->db->query("SELECT * FROM user");
        return $hasil->result();
    }
    function hapus_jawaban($id){
            $hasil=$this->db->query("DELETE FROM jawaban WHERE id='$id'");
            return $hasil;
        }

}

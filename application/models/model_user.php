
	<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;

	
		}
		public function insertUser() {

        //insert data
        $data = array(
            //assign data into array elements
            'email' => $this->input->post('email'),
            'skpd' => $this->input->post('skpd'),
            'username' => $this->input->post('username'),
            'umur' => $this->input->post('umur'),
            'no_telpn' => $this->input->post('no_telpn'),
            'level' => $this->input->post('level'),
            'password' =>md5($this->input->post('password'))
        );
        //insert data to the database
        $this->db->insert('user',$data);

    }
		
	}





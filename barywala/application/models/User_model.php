<?php
	class User_model extends CI_Model{
		
		//user data model for registration
		public function signup($enc_password){
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => $enc_password,
				'contact' => $this->input->post('contact'),

			);
			return $this->db->insert('renters',$data);
		}

		// Log user in
		public function login($email, $password){
			// Validate
			$this->db->where('email', $email);
			$this->db->where('password', $password);

			$result = $this->db->get('renters');

			if($result->num_rows() == 1){
				return $result->row();
			} else {
				return false;
			}
		}

		public function update_user($id, $data){
			// print_r($user_id);
			$this->db->set($data);
			$this->db->where('id',$id); 
			$this->db->update('renters');

			if($this->db->affected_rows()>0)
			{
				return true;
			}
			else{
				return false;
			}
		}	


		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('renters', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
		
 }
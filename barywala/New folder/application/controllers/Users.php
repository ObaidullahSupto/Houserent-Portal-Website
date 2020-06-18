<?php
	class Users extends CI_Controller{
		//Register user
		public function signup(){
			$data['title'] = 'Sign Up Here';
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('password2','Confirm Password','matches[password]');
			$this->form_validation->set_rules('contact','Contact','required');


			if( $this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/signup', $data);
				$this->load->view('templates/footer');
			}
			else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));
				$this->user_model->signup($enc_password);
				// Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
				redirect('users/login');
			}
 
		}

		// Log in user
		public function login(){
			$data['title'] = 'Log In to your Account';
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} 
			else {
				// Get username
				$email = $this->input->post('email');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));
				
				// Login user
				$result = $this->user_model->login($email, $password);
				// print_r($result);
				// exit();

					if($result!=null){
					// Create session
					$session_data = array(						
						'email' => $email,
						'id' => $result->id,
						'name' => $result->name,  
						'contact' => $result->contact,
						'logged_in' => true
					);
					$this->session->set_userdata($session_data);
					// Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
					redirect('users/profile');
					
				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');
					redirect('users/login');
				}		
			}
		}



		//Logout User
		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('email');
			$this->session->sess_destroy();
			$this->output->delete_cache();

			// Set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');
			redirect('users/login');
		}


		public function profile(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title'] = 'Profile Update';
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('contact','Contact','required');
			$this->form_validation->set_rules('password','Password','required');

			if( $this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/profile', $data);
				$this->load->view('templates/footer');
			}
			else {
				$enc_password = md5($this->input->post('password'));
				$data = array(
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'contact' => $this->input->post('contact'),
					'password' => $enc_password
				);

				$result = $this->user_model->update_user($this->session->userdata('id'),$data);
				if($result > 0)
				{
					$this->session->set_flashdata('user_update', 'Profile updated!! Log in again to view the updated result.');
					redirect('users/profile');
				}
				else{
					$this->session->set_flashdata('error_user_update', 'Error!!! Check Again');
					redirect('users/profile');
				}
			}
 
		}

		// Check if email id exists
		public function check(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}			
			else{
				redirect('posts/add_commercial');
			}
		}


			
	
		// Check if email id exists
		public function check_email_exists($email){
			$this->form_validation->set_message(
				'check_email_exists','That email is taken.Please choose a different one');

			if($this->user_model->check_email_exists($email)){
				return true;
			}
			else{
				return false;
			}
		}

		
	}

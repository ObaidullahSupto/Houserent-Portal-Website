<?php
	Class Email extends CI_Controller{
		// function __construct(){
		// 	parent::__construct();
		// 	}

			public function index(){
					$this->load->view('contact');
			}

			public function send(){
				$name =	$this->input->post('name');
				$email = $this->input->post('email');
				$subject = $this->input->post('subject');
				$message = $this->input->post('message');

				//Configuration
				$config = Array(
					'protocol' =>'smtp',
					'smtp_host' => 'mail.barywala.com',
					'smtp_port' => 465,
					'smtp_user'  =>'info@barywala.com',//mail@gmail.com
					'smtp_pass'  =>'barywala2019',//mail pwd
					'mailtype' =>'html',
					'wordwrap' => True,
					'charset' => 'iso-8859-1',
					'validation' => true
				);
				$this->load->library('email',$config);
				$this->email->set_newline("\r\n");
				$this->email->from('$email');
				$this->email->to('info@barywala.com');//mail@gmail.com
				$this->email->subject($subject);
				$this->email->message($message);
				if($this->email->send()){
					// Set message
					$this->session->set_flashdata('mail_sent', 'Email Sent Successfully!!');
					redirect('contact');
				} 
				else{
					// Set message
					$this->session->set_flashdata('mail_failed', 'Error!!! Email Sending failed.');
					redirect('contact');
				}
			}
	}
<?php
/*Residentials Controller To Show Different pages*/
	class Residentials extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
			header('Cache-Control:  no-cache, must-revalidate, post-check=0, pre-check=0');
			header('Pragma: no-cache');
			header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
		}
		//Add Residential Post
		public function add_residential()
		{
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title'] = 'Add Residential';
			$data['districts'] = $this->residential_model->get_districts();
			
			$this->form_validation->set_rules('title','Title','required|callback_check_title_exists');
			$this->form_validation->set_rules('city','City','required');
			$this->form_validation->set_rules('area','Area','required');
			$this->form_validation->set_rules('address','Address','required');
			$this->form_validation->set_rules('rent','Rent','required');
			$this->form_validation->set_rules('category','Category','required');
			$this->form_validation->set_rules('size','Size','required');
			$this->form_validation->set_rules('rooms','No of Rooms','required');
			$this->form_validation->set_rules('washrooms','No of Washrooms','required');
			$this->form_validation->set_rules('veranda','No of Veranda','required');
			$this->form_validation->set_rules('parking','Parking','required');
			$this->form_validation->set_rules('lift','Lift','required');
			$this->form_validation->set_rules('gas','Gas','required');
			$this->form_validation->set_rules('floor','Floor No','required');
			$this->form_validation->set_rules('bills','Bills','required');
			$this->form_validation->set_rules('bachelor','Bachelor','required');
			$this->form_validation->set_rules('time_period','Contact Period','required');
			$this->form_validation->set_rules('contact','Contact','required');
			$this->form_validation->set_rules('short_note','Short Description','required');  
			if($this->form_validation->run()===False)
			{	
							
				$this->load->view('templates/header');
				$this->load->view('residentials/add_residential', $data);
				$this->load->view('templates/footer');
			}
				
			else
			{
				$this->load->library('image_lib');
				$this->load->library('upload');
				$dataInfo = array();
				$files = $_FILES;
				$imageCount  = count($_FILES['userfile']['name']);
				for($i=0; $i<$imageCount ; $i++)
			    {           
			        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
			        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
			        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
			        $_FILES['userfile']['size']= $files['userfile']['size'][$i];

			        $config['image_library'] = 'gd2';
			        $config['source_image'] = '/assets/img/residential';
			        $config['upload_path'] = './assets/img/residential'; 
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
    				$config['width']  = '1280' ;
        			$config['height'] = '800' ; 
					$config['quality'] = '30%';


					$this->load->library('upload', $config);				
					$this->upload->initialize($config);
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$this->upload->do_upload();
					$dataInfo[] = $this->upload->data();
				}
				
	               $image = $dataInfo[0]['file_name'];
	               $image1 = $dataInfo[1]['file_name'];
	               $image2 = $dataInfo[2]['file_name'];
	               $image3 = $dataInfo[3]['file_name'];
	               $image4 = $dataInfo[4]['file_name'];         

			     $this->residential_model->add_residential($image, $image1, $image2, $image3, $image4);

				//set message
				$this->session->set_flashdata('post_created','You Post has been created'); 
	 			redirect('residentials/add_residential');
			}
		}
		//View all the data from Residential table
		public function view_all_residential($offset = 0)
		{   
			$config['base_url'] = base_url().'residentials/view_all_residential/';
			$config['total_rows'] = $this->db->count_all('residential');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-links');
			$config['prev_link'] = '<<';
			$config['next_link'] = '>>';
			$this->pagination->initialize($config);

			$data['title'] = 'View All Residential Post';
			$data['residential'] = $this->residential_model->view_all_residential(False,$config['per_page'], $offset );
			$data['city'] = $this->residential_model->get_city();
		    $data['areas'] = $this->residential_model->get_area();
			$this->load->view('templates/header');
			$this->load->view('residentials/view_all_residential', $data);
			$this->load->view('templates/footer');
		}

		//View all the data from residential table for renters
		public function view_all_residential_for_user($user_id = 0)
		{
			if($this->session->userdata('logged_in')){
				$user_id = $this->session->userdata('id');
				$data['title'] = 'View All Residential Post for renters';
				$data['residential'] = $this->residential_model->view_all_residential_for_user($user_id);
				$this->load->view('templates/header');
				$this->load->view('residentials/view_all_residential_for_user', $data);
				$this->load->view('templates/footer');
				}

				else{
					redirect('users/login');
				}
			
		}

		//this will load all data from residential table	
		public function all_residential_list($offset = 0)
		{
		    $config['base_url'] = base_url().'residentials/all_residential_list/';
    		$config['total_rows'] = $this->db->count_all('residential');
    		$config['per_page'] = 5;
    		$config['uri_segment'] = 5;
    		$config['attributes'] = array('class' => 'pagination-links');
    		$config['prev_link'] = '<<';
    		$config['next_link'] = '>>';
    		$this->pagination->initialize($config);
		
			$data['title'] = 'All Residential List';
			$data['city'] = $this->residential_model->get_city();
			$data['areas'] = $this->residential_model->get_area();;
		    $data['residential'] = $this->residential_model->view_all_residential(False,$config['per_page'], $offset );
			$this->load->view('templates/header');
			$this->load->view('residentials/all_residential_list', $data);
			$this->load->view('templates/footer');
		}



		public function get_all_filtered()
	    {
			$data['title'] = 'Showing properties by - ALL';
			$data['city'] = $this->residential_model->get_city();
			$data['areas'] = $this->residential_model->get_area();     
	        $city = $this->input->post('city');
	 		$area = $this->input->post('area');
	 		$rooms = $this->input->post('rooms');
	 		$search = $this->input->post('search');

			$minimum_size = $this->input->post('minimum_size');
	  		$maximum_size = $this->input->post('maximum_size');	
	 		$minimum_rent = $this->input->post('minimum_rent');
	  		$maximum_rent = $this->input->post('maximum_rent');

	        $data['residential'] = $this->residential_model->get_all_filtered($city,$area,$rooms,$search,$minimum_rent,$maximum_rent,$minimum_size,$maximum_size);
	        $this->load->view('templates/header');
			$this->load->view('residentials/all_residential_list', $data);
			$this->load->view('templates/footer');

	    }
		

		public function get_post()
	    {
			$data['title'] = 'Showing properties by-'.$this->input->post('search');
			$data['city'] = $this->residential_model->get_city();
			$data['areas'] = $this->residential_model->get_area();      
	        $search = $this->input->post('search');
	        $data['residential'] = $this->residential_model->get_post($search);
	        $this->load->view('templates/header');
			$this->load->view('residentials/all_residential_list', $data);
			$this->load->view('templates/footer');
	    }

	    public function get_post_by_city()
	    {
			$data['title'] = 'Showing properties in-'.$this->input->post('city').' city';
			$data['city'] = $this->residential_model->get_city();
			$data['areas'] = $this->residential_model->get_area();
	        $city = $this->input->post('city');
	        $data['residential'] = $this->residential_model->get_post_by_city($city);
	        $this->load->view('templates/header');
			$this->load->view('residentials/all_residential_list', $data);
			$this->load->view('templates/footer');
	    }

	    public function get_post_by_area()
	    {
			$data['title'] = 'Showing properties in-'.$this->input->post('area').' area';
			$data['city'] = $this->residential_model->get_city();
			$data['areas'] = $this->residential_model->get_area();
	        $area = $this->input->post('area');
	        $data['residential'] = $this->residential_model->get_post_by_area($area);
	        $this->load->view('templates/header');
			$this->load->view('residentials/all_residential_list', $data);
			$this->load->view('templates/footer');
	    }

	     //filter by size
	    public function get_post_by_size()
	    {
			$data['title'] = 'Showing properties between '.$this->input->post('minimum_size').'-'.$this->input->post('maximum_size').' Sq.Ft';
			$data['city'] = $this->residential_model->get_city();
			$data['areas'] = $this->residential_model->get_area();
			$minimum_size = $this->input->post('minimum_size');
	  		$maximum_size = $this->input->post('maximum_size');
	        $data['residential'] = $this->residential_model->get_post_by_size($minimum_size,$maximum_size);
	        $this->load->view('templates/header');
			$this->load->view('residentials/all_residential_list', $data);
			$this->load->view('templates/footer');
	    }

	    //filter by rooms
	    public function get_post_by_rooms()
	    {
			$data['title'] = 'Showing properties with-'.$this->input->post('rooms').' rooms';
			$data['city'] = $this->residential_model->get_city();
			$data['areas'] = $this->residential_model->get_area();
	        $rooms = $this->input->post('rooms');
	        $data['residential'] = $this->residential_model->get_post_by_rooms($rooms);
	        $this->load->view('templates/header');
			$this->load->view('residentials/all_residential_list', $data);
			$this->load->view('templates/footer');
	    }

	    //filter by rent
	    public function get_post_by_rent()
	    {
			$data['title'] = 'Showing properties between '.$minimum_rent = $this->input->post('minimum_rent').'-'.$maximum_rent = $this->input->post('maximum_rent').' taka';
			$data['city'] = $this->residential_model->get_city();
			$data['areas'] = $this->residential_model->get_area();
	        $minimum_rent = $this->input->post('minimum_rent');
	  		$maximum_rent = $this->input->post('maximum_rent');
	        $data['residential'] = $this->residential_model->get_post_by_rent($minimum_rent,$maximum_rent);
	        $this->load->view('templates/header');
			$this->load->view('residentials/all_residential_list', $data);
			$this->load->view('templates/footer');
	    }

	    public function get_post_by_high_rent(){
    	$data['title'] = 'Showing properties with high to low rent';
    	$data['city'] = $this->residential_model->get_city();
		$data['areas'] = $this->residential_model->get_area();
 		$data['residential'] = $this->residential_model->get_post_by_high_rent();
        $this->load->view('templates/header');
		$this->load->view('residentials/all_residential_list', $data);
		$this->load->view('templates/footer');
    }

     public function get_post_by_low_rent(){
     	$data['title'] = 'Showing properties with low to high rent';
    	$data['city'] = $this->residential_model->get_city();
		$data['areas'] = $this->residential_model->get_area();
 		$data['residential'] = $this->residential_model->get_post_by_low_rent();
        $this->load->view('templates/header');
		$this->load->view('residentials/all_residential_list', $data);
		$this->load->view('templates/footer');
    }

		


		//View Single data from Residential table when click on the link 
		public function view_single_residential($slug)
		{		
			$data['item'] = $this->residential_model->view_all_residential($slug); 
			if(empty($data['item'])){
				show_404();
			}

			$data['title'] = $data['item']['title'];
			$this->load->view('templates/header');
			$this->load->view('residentials/view_single_residential', $data);
			$this->load->view('templates/footer');
		}

		// Edit residential  Post
		public function edit_residential($slug)
		{
		// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}	
			$data['districts'] = $this->residential_model->get_districts();
			$data['item'] = $this->residential_model->view_all_residential($slug); 
			if(empty($data['item'])){
				show_404();
			}
			$data['title'] = 'Edit Post';
			$this->load->view('templates/header');
			$this->load->view('residentials/edit_residential', $data);
			$this->load->view('templates/footer');
		}

		// Update residential Post
		public function update_residential()
		{
		// Check login
		if(!$this->session->userdata('logged_in')){
			redirect('users/login');
		}

		$result = $this->residential_model->update_residential_post();
		if($result > 0)
		{
			$this->session->set_flashdata('post_edited', 'Your post has been edited');
			redirect('residentials/view_all_residential_for_user');
		}
		else{
			$this->session->set_flashdata('error_edit', 'Error!!! Check Again');
			redirect('residentials/view_all_residential_for_user');
		}		
			
			
		}

		//Delete Post
		public function delete($id){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$result = $this->residential_model->delete_post($id);
			if($result > 0)
			{
				$this->session->set_flashdata('post_deleted', 'Your post has been deleted');
				redirect('residentials/view_all_residential_for_user');
			}
			else{
				$this->session->set_flashdata('error_delete', 'Error!!! Check Again');
				redirect('residentials/view_all_residential_for_user');
			}		
			
		}

		public function districts()
		{
			$data['districts'] = $this->residential_model->get_districts();
			$this->load->view('residentials/add_residential', $data);
			$this->load->view('residentials/edit_residential', $data);
		}

		 //filter by specific city
     public function get_post_by_dhanmondi()
    {
		$data['title'] = 'Showing properties in - Dhanmondi Area';
		$data['city'] = $this->residential_model->get_city();
		$data['areas'] = $this->residential_model->get_area();
        $data['residential'] = $this->residential_model->get_post_by_dhanmondi();
        $this->load->view('templates/header');
		$this->load->view('residentials/all_residential_list', $data);
		$this->load->view('templates/footer');
    }

     public function get_post_by_banani()
    {
		$data['title'] = 'Showing properties in - Banani Area';
		$data['city'] = $this->residential_model->get_city();
		$data['areas'] = $this->residential_model->get_area();
        $data['residential'] = $this->residential_model->get_post_by_banani();
        $this->load->view('templates/header');
		$this->load->view('residentials/all_residential_list', $data);
		$this->load->view('templates/footer');
    }

     public function get_post_by_baridhara()
    {
		$data['title'] = 'Showing properties in - Baridhara Area';
		$data['city'] = $this->residential_model->get_city();
		$data['areas'] = $this->residential_model->get_area();
        $data['residential'] = $this->residential_model->get_post_by_baridhara();
        $this->load->view('templates/header');
		$this->load->view('residentials/all_residential_list', $data);
		$this->load->view('templates/footer');
    }

     public function get_post_by_basundhara()
    {
		$data['title'] = 'Showing properties in - Basundhara Area';
		$data['city'] = $this->residential_model->get_city();
		$data['areas'] = $this->residential_model->get_area();
        $data['residential'] = $this->residential_model->get_post_by_basundhara();
        $this->load->view('templates/header');
		$this->load->view('residentials/all_residential_list', $data);
		$this->load->view('templates/footer');
    }

     public function get_post_by_gulshan1()
    {
		$data['title'] = 'Showing properties in - Gulshan 1 Area';
		$data['city'] = $this->residential_model->get_city();
		$data['areas'] = $this->residential_model->get_area();
        $data['residential'] = $this->residential_model->get_post_by_gulshan1();
        $this->load->view('templates/header');
		$this->load->view('residentials/all_residential_list', $data);
		$this->load->view('templates/footer');
    }

     public function get_post_by_gulshan2()
    {
		$data['title'] = 'Showing properties in - Gulshan 2 Area';
		$data['city'] = $this->residential_model->get_city();
		$data['areas'] = $this->residential_model->get_area();
        $data['residential'] = $this->residential_model->get_post_by_gulshan2();
        $this->load->view('templates/header');
		$this->load->view('residentials/all_residential_list', $data);
		$this->load->view('templates/footer');
    }



    // Check if title exists
		public function check_title_exists($title){
			$this->form_validation->set_message(
				'check_title_exists','<p style="color:red;">Title is already exist.Please choose a different one</p>');

			if($this->residential_model->check_title_exists($title)){
				return true;
			}
			else{
				return false;
			}
		}
			
	}
?>
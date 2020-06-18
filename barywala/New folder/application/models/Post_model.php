<?php
	class Post_model extends CI_Model{

        //Add data to commercial table 
        public function add_commercial($image , $image1, $image2, $image3,$image4) {

            $slug = url_title($this->input->post('title'));

            $data = array(
                'user_id' => $this->session->userdata('id'),
                'title' => $this->input->post('title'),
                'slug'=>$slug,
                'city' => $this->input->post('city'),
                'area' => $this->input->post('area'),
                'address' => $this->input->post('address'),
                'rent' => $this->input->post('rent'),
                'rooms' => $this->input->post('rooms'),
                'washrooms' => $this->input->post('washrooms'),
                'size' => $this->input->post('size'),
                'time_period' => $this->input->post('time_period'),
                'contact' => $this->input->post('contact'),
                'image' => $image,
                'image1' => $image1,
                'image2' => $image2,
                'image3' => $image3,
                'image4' => $image4,
                'short_note' => $this->input->post('short_note')
            );           

            return $this->db->insert('commercial',$data);
        }

		//View all commercial data with pagination
		public function view_all_commercial($slug = false, $limit = false, $offset = false)
        {
            if($limit)
            {
                $this->db->limit($limit,$offset );
            }   
			if($slug == false)
            {
				$query = $this->db->get('commercial');
				return $query->result_array();
			}
			$query = $this->db->get_where('commercial',array('slug' => $slug));
			return $query->row_array();
		}

        //View all commercial data 
        public function all_commercial_list($slug = false, $limit = false, $offset = false){
        if($limit)
            {
                $this->db->limit($limit,$offset );
            }  
            
            if($slug == false){
                $query = $this->db->get('commercial');
                return $query->result_array();
            }

            $query = $this->db->get_where('commercial',array('slug' => $slug));
            return $query->row_array();
        }

        //view filteres or searched data
        public function get_all_filtered($city,$area,$rooms,$search,$minimum_rent,$maximum_rent,$minimum_size,$maximum_size)
        {
            $this->db->select('*');
            $this->db->from('commercial');
            if(!empty($search)) {
                $this->db->group_start();
                $this->db->like('title', $search);
                $this->db->or_like('short_note', $search);
                $this->db->group_end();
            }

            if(isset($minimum_size, $maximum_size) && !empty($minimum_size) &&  !empty($maximum_size))
              {
                $this->db->where('size >=', $minimum_size);
                $this->db->where('size <=', $maximum_size);
              }

              
            if(isset($minimum_rent, $maximum_rent) && !empty($minimum_rent) &&  !empty($maximum_rent))
              {
                $this->db->where('rent >=', $minimum_rent);
                $this->db->where('rent <=', $maximum_rent);
              }

            
        
            $array = array('city' => $city, 'area' => $area, 'rooms' => $rooms);
            $this->db->like($array); 

            $query = $this->db->get();
            return $query->result_array();
           
        } 

        public function get_post($search)
        {
           $this->db->select('*');
            $this->db->from('commercial');
           if($search != ''){
            $this->db->like('title', $search);
            $this->db->or_like('city', $search);
            $this->db->or_like('area', $search);
            $this->db->or_like('short_note', $search);
            $this->db->or_like('address', $search);
            $this->db->or_like('rent', $search);
            $this->db->or_like('rooms', $search);
            $this->db->or_like('washrooms', $search);
            $this->db->or_like('size', $search);
            }
            $query = $this->db->get();
            return $query->result_array();
        }
        //Filter by city
        public function get_post_by_city($city){
            $this->db->select('*');
            $this->db->from('commercial');
            $this->db->where('city' , $city);
            $query = $this->db->get();
            return $query->result_array();
        }
        //Filter by area
        public function get_post_by_area($area){
            $this->db->select('*');
            $this->db->from('commercial');
            $this->db->where('area' , $area);
            $query = $this->db->get();
            return $query->result_array();
        }
        //Filter by room
        public function get_post_by_rooms($rooms){
            $this->db->select('*');
            $this->db->from('commercial');
            $this->db->where('rooms' , $rooms);
            $query = $this->db->get();
            return $query->result_array();
        }

        //rent filter by min to max
        public function get_post_by_rent($minimum_rent, $maximum_rent){
            $this->db->select('*');
            $this->db->from('commercial');
            $this->db->where('rent >=', $minimum_rent);
            $this->db->where('rent <=', $maximum_rent);
            $query = $this->db->get();
            return $query->result_array();
        }

        //area filter by min to max
        public function get_post_by_size($minimum_size, $maximum_size){
            $this->db->select('*');
            $this->db->from('commercial');
            $this->db->where('size >=', $minimum_size);
            $this->db->where('size <=', $maximum_size);
            $query = $this->db->get();
            return $query->result_array();
        }

        //high to low
        public function get_post_by_high_rent(){
            $this->db->select('*');
            $this->db->from('commercial');
             $this->db->order_by("rent", "desc");
             $query = $this->db->get();
            return $query->result_array();
        }   

        //low to high
        public function get_post_by_low_rent(){
            $this->db->select('*');
            $this->db->from('commercial');
           $this->db->order_by("rent", "asc");
             $query = $this->db->get();
            return $query->result_array();
        }

        //view all commercial post for user
        public function view_all_commercial_for_user($user_id){       
            $user_id = $this->session->userdata('id');
            $this->db->order_by('commercial.id', 'DESC');
            $query = $this->db->get_where('commercial', array('user_id' => $user_id));
            return $query->result_array();
        }

        //Delete data from commercial table
        public function delete_post($id){
            $this->db->where('id',$id); 
            $this->db->delete('commercial');
            return true;
        }

        //Update value of commercial table
        public function update_post(){
            $slug = url_title($this->input->post('title'));
            $data = array(
                'title' => $this->input->post('title'),
                'slug'=>$slug,
                'city' => $this->input->post('city'),
                'area' => $this->input->post('area'),
                'address' => $this->input->post('address'),
                'rent' => $this->input->post('rent'),
                'rooms' => $this->input->post('rooms'),
                'washrooms' => $this->input->post('washrooms'),
                'size' => $this->input->post('size'),
                'time_period' => $this->input->post('time_period'),
                'contact' => $this->input->post('contact'),
                // 'image' => $this->input->post('image'),
                'short_note' => $this->input->post('short_note')
            );
             $this->db->where('id',$this->input->post('id')); 
             return $this->db->update('commercial',$data);
        }

        //view district dropdown value
        public function get_districts(){
        	$this->db->order_by("name","ASC");
        	$query = $this->db->get('districts');
        	if($query->num_rows()>0){
        		return $query->result_array();
        	}
        } 

         public function get_city()
        {
            $this->db->distinct();
            $this->db->select('city');
            $this->db->from('commercial');
            $query = $this->db->get();
            if($query->num_rows()>0){
                return $query->result_array();
            }
        }

        public function get_area()
        {
            $this->db->distinct();
            $this->db->select('area');
            $this->db->from('commercial');
             // $this->db->where('city' , 'city');
            $query = $this->db->get();
            if($query->num_rows()>0){
                return $query->result_array();
            }
        }

       
        
       


         public function get_post_by_dhanmondi(){
            $this->db->select('*');
            $this->db->from('commercial');
            $this->db->where('area' , 'dhanmondi');
            $query = $this->db->get();
            return $query->result_array();
         }

         public function get_post_by_baridhara(){
            $this->db->select('*');
            $this->db->from('commercial');
            $this->db->where('area' , 'baridhara');
            $query = $this->db->get();
            return $query->result_array();
         }

         public function get_post_by_banani(){
            $this->db->select('*');
            $this->db->from('commercial');
            $this->db->where('area' , 'banani');
            $query = $this->db->get();
            return $query->result_array();
         }

         public function get_post_by_basundhara(){
            $this->db->select('*');
            $this->db->from('commercial');
            $this->db->where('area' , 'basundhara');
            $query = $this->db->get();
            return $query->result_array();
         }

         public function get_post_by_gulshan1(){
            $this->db->select('*');
            $this->db->from('commercial');
            $this->db->where('area' , 'gulshan 1');
            $query = $this->db->get();
            return $query->result_array();
         }

         public function get_post_by_gulshan2(){
            $this->db->select('*');
            $this->db->from('commercial');
            $this->db->where('area' , 'gulshan 2');
            $query = $this->db->get();
            return $query->result_array();
         }
	}
	
?>
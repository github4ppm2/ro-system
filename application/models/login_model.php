<?php 
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the email & password from tbl_usrs
     function get_user($email, $password)
     {
		 $this-> db->select ();
		 $this-> db->from(tbl_user);
		 $this-> db->where ('email',$email);
		 $this-> db->where ('password', $password);
		 
		 $query = $this->db->get();
		 if($query-> num_rows == 1)
		 {
			 return $query->result();
		 }
		 else
		 {
			 return false;
		 }
		 
	 }
		 
         
		 
		public function add_user()
        {
           $data=array(
            
             'email'=>$this->input->post('email'),
             'password'=>($this->input->post('password')),
            'user_roles'=>$this->input->post('role'),
            
                      );
        $this->db->insert('tbl_user',$data);
        return true;
		
        }
		 
		 public function edit_user()
		 {
			 
			 $data = array(
			 'veid'=>$this->input->post('veid'),
			 'name'=>$this->input->post('name'),
			 'phone'=>$this->input->post('phone'),
			 'department'=>$this->input->post('department'),			 
			 );
			 $uid=$this->session->userdata('user_id');			 
		     $this->db->update('tbl_user',$data,array('id'=>$uid));
			 return true;
			  
		 }
		  public function get_uesr()
		 {
			 $uid=$this->session->userdata('user_id');
			
			 $this->db->select("email,roles.user_roles,department,veid,name,phone");
             $this->db->from('tbl_user');
			 $this->db->where('tbl_user.id',$uid);
			 $this->db->join('roles', 'roles.v_id = tbl_user.user_roles'); 
             $query = $this->db->get();
			// print_r($query);
			// die();
			
             return $query->result(); 
		 }
		 
		 public function addmenu()
		 {
			$this->db->from('department');
			$this->db->order_by('name');
			$result = $this->db->get();
		
			$return = array();
			
			if($result->num_rows() > 0) {
				foreach($result->result_array() as $row) {
					$return[$row['id']] = $row['name'];
				}
			}
			
			return $return;
		 }
		 
		 
		 
		 public function change_password()
		 {
			
			 
			 $uid=$this->session->userdata('user_id'); 
			 $this->db->select("password");
			 $this->db->from(tbl_user);
			 $this->db->where('id',$uid);
			 $query = $this->db->get();
			 
			 return $query->result();
 
		 }
		 public function update_pass()
		 {
			 $uid=$this->session->userdata('user_id'); 
             $query = $this->db->update('tbl_user',array('id'=>$uid));			 
			 return true;
		 }
		
     public function user_list()
	 {
		 $this->db->select("id,veid,name,phone");
		 $this->db->from(tbl_user);
		 $query = $this->db->get();
		
		 return $query->result();
		 
	 }
	 
	 public function listing_delete()
	 {
		   $this->db->delete('tbl_user'); 
		   $this->db->where('id', $id);
     
	   $query = $this->db->get();
		
		 return $query->result();
	 }
}
?>

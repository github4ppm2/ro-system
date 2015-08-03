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
             'password'=>md5($this->input->post('password')),
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
			 'Department'=>$this->input->post('Department'),
			 
			 );
			 $uid=$this->session->userdata('user_id');			 
		     $this->db->update('tbl_user',$data,array('id'=>$uid));
			 return true;
			  
		 }
		  public function get_uesr()
		 {
			 $this->db->select("email,roles.user_roles");
             $this->db->from('tbl_user');
			 $this->db->join('roles', 'roles.v_id = tbl_user.user_roles'); 
             $query = $this->db->get();
             return $query->result(); 
		 }
		 
		 
	  
     
}
?>

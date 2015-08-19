<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MY_Controller {
 
     public function __construct()
    {
		
        parent::__construct();       
        $this->load->model('login_model');       

        if(!$this->session->userdata('logged_in')){
			redirect('login/index');
        }
        $this->_init();
    }
        private function _init()
	{
		$this->output->set_template('default');

	}
    public function index()
    {	
		
	 $this->load->view('dashboard/index');
    }

	public function Registration()
	{
		 $rules = array(
			  
			  array('field'=>'email','label'=>'email','rules'=>'trim|required|valid_email|is_unique[tbl_user.email]'),
			  array('field'=>'password','label'=>'Password','rules'=>'trim|required|min_length[6]'),
			  array('field'=>'role','label'=>'role','rules'=>'required')
				);
			 $this->form_validation->set_rules($rules);
			 if($this->form_validation->run() == FALSE)
				{
					$this->load->view('dashboard/registration_view');
				}
		  
				 
				else
				{
					//validation succeeds
					if($this->input->post('submit'))
					{
						 
						//check if email,password and role is correct
						 $resultset = $this->login_model->add_user(); 
						 
						 redirect('dashboard/Registration');
					}
		
					}
	}
	public function edit()
	{
		     $data['department'] = $this->login_model->addmenu();
		     $this->load->model('login_model'); 
             $data['query']=$this->login_model->get_uesr();
         // print_r($this->session->userdata('user_id'));
		$rules= array(
				           
							array('field'=>'veid','label'=>'veid','rules'=>'required'),
							array('field'=>'name','label'=>'name','rules'=>'required'),
							array('filed'=>'phone','label'=>'phone','rules'=>'required'),
							array('field'=>'department','label'=>'department','rules'=>'required')
				  );
				  
						$this->form_validation->set_rules($rules );
			 
					   if($this->form_validation->run()== FALSE)
				 
			 {
				
				 $this->load->view('dashboard/edit_view',$data);
			 }
			 
			 else
			 {
				 if($this->input->post('submit'))
				 {
					
					 $resultset = $this->login_model->edit_user();
					
					redirect('dashboard/edit');
				 }
			 }

	}
	
	
	public function change_pass()
	{
	          
			
	           
			  $data = array(
			 'old_pass'=>$this->input->post('old_pass'),
			 'new_pass'=>$this->input->post('new_pass'),
			 'conf_pass'=>$this->input->post('conf_pass'),
			 );
	
	  
		
		$rules = array (
		                 array('field'=>'old_pass','label'=>'old_pass','rules'=>'required'),
						 array('field'=>'new_pass','label'=>'new_pass','rules'=>'required'),
						 array('field'=>'conf_pass','label'=>'conf_pass','rules'=>'required')	  		
             		    );
		$this->form_validation->set_rules($rules);						
		if($this->form_validation->run()== FALSE)				 
		 {
			
			 $this->load->view('dashboard/change_pass_view');
		 }			 
		 else
		 {
			 if($this->input->post('submit'))
			 {
				 $resultset = $this->login_model->change_password();
				 
				 //echo $data['old_pass'];
				// die;
				//print_r($resultset);
				//die();
				if($resultset == $data['old_pass'] && $data['new_pass']== $data['conf_pass'])
				{
				
					  $resultset1= $this->login_model->update_pass();
					  redirect ('dashboard/index');
				}
				 
			  
				

			 }
		 }		
		
				
		
	  
	    
		
	}
	
	public function user_listing()
	{
		
		//$this->load->view('dashboard/user_listing');
		$this->load->model('login_model');
		$data['query'] = $this->login_model->user_list();
		
		$this->load->view('dashboard/user_listing',$data);
		//echo "<pre>";
		//print_r($data['query']);
		//die();
		
		
	}
	
	public function list_delete()
	{
		$this->load->model('login_model');
        $data['query'] = $this->login_model->listing_delete();
		echo "<pre>";
		print_r($data['query']);
		die();
		
	}
}






















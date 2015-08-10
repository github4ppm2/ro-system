<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login extends MY_Controller
{

     public function __construct()
     {		  
          parent::__construct();         
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          //$this->load->library('form_validation');
          //load the login model
          $this->load->model('login_model');
		  $this->load->helper('dropdown');
     }
	
	 
	 
       public function forgot()
	   {
	    $email = $this->input->post("email");
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');
	     if ($this->form_validation->run() == FALSE)
          { $this->load->view('login_forgot');
		  
		  }
	   
	   }
	   
	   public function logout()
	   {  
	   
	    $this->session->sess_destroy();
         redirect('login/index');
		  
		   
	   }
	  
		   
	   
     public function index()
     {		
		
		  $email = $this->input->post("email");
          $password = $this->input->post("password");

          //set validations
          $this->form_validation->set_rules("email", "email", "trim|required");
          $this->form_validation->set_rules("password", "Password", "trim|required |callback_verifyuser");
	
          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
			
               $this->load->view('login_view');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if email and password is correct
                    $usr_result = $this->login_model->get_user($email, $password);
                    
				     //print_r( $usr_result);
					 //die();
                    if ($usr_result > 0) //active user record is present
                    {
						
                         //set the session variables
						// $session_id = $this->session->userdata('session_id');
						$uresult = $usr_result[0];
                        $session_data = array(
						       'user_id'=> $uresult->id,
							   'email'=>$uresult->email,
                             'status' =>$uresult->status,
						      'logged_in'=>true
                            
							 
                         );
                        
                          $this->session->set_userdata($session_data);
						  
                         redirect( 'Dashboard/index','refresh');
					
                    }
                    else
                    {
						
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid emailId and password!</div>');
                         redirect('login/index');
                    }


               }
               else
               {
				
                   redirect('login/index');
               }
          }
		  

     }
}?>

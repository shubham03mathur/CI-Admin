<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->helper('url');
   $this->load->library('session');
 }
 
 function index()
 {

   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
   $username = $this->input->post('username');
   $password = $this->input->post('password');
   //$check = $this->check_database($username,$password);
   if($this->form_validation->run() == false)
   {
     //Field validation failed.  User redirected to login page
     redirect('admin','refresh');
     $this->load->view('login_form');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
    
   //query the database
   $result = $this->user->login($username, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
    return TRUE;
   }
   else
   {
     //$this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>
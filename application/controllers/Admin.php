<?php 
  //session_start();

   class Admin extends CI_Controller {  
	  public function __construct() {

      parent::__construct();

      // Load form helper library
      $this->load->helper('form');

      // Load URL helper library
      $this->load->helper('url');

      // Load form validation library
      $this->load->library('form_validation');

      // Load session library
      $this->load->library('session');
    }

    public function index() {
    	//show login form
      $this->load->view('login_form');
    }

    public function hello() { 
       echo "This is hello function."; 
    } 
  } 
?>
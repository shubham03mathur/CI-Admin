<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  //session_start();

   class Home extends CI_Controller {  
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
      $this->load->view('home_view');
      //$this->load->view('login_form');
    }
  } 
?>
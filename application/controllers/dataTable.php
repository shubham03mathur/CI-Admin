<?php 
  //session_start();

class dataTable extends CI_Controller {  
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

    //Load Model
    $this->load->model('paginationdata','',TRUE);

    $uploadData = array();
  }
  
  public function getClientData() {
    $this->paginationdata->getClientInfo(5,5);
  }
} 

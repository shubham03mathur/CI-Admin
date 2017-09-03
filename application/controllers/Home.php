<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  //session_start();

   class Home extends CI_Controller {  
	  public function __construct() {

      parent::__construct();

      $this->load->model('paginationdata','',TRUE);
      // Load form helper library
      $this->load->helper('form');

      $this->load->library('pagination');

      // Load URL helper library
      $this->load->helper('url');

      // Load form validation library
      $this->load->library('form_validation');

      // Load session library
      $this->load->library('session');
    }

    public function index() {
      $data['controller'] = $this;
      $this->load->view('home_view');
    }

    public function getPagination($offset=0){
      $config['total_rows'] = $this->paginationdata->totalClientData();
  
      $config['base_url'] = base_url()."index.php/home";
      $config['per_page'] = 5;
      $config['uri_segment'] = '2';

      $config['full_tag_open'] = '<div class="pagination"><ul>';
      $config['full_tag_close'] = '</ul></div>';

      $config['first_link'] = '« First';
      $config['first_tag_open'] = '<li class="prev page">';
      $config['first_tag_close'] = '</li>';

      $config['last_link'] = 'Last »';
      $config['last_tag_open'] = '<li class="next page">';
      $config['last_tag_close'] = '</li>';

      $config['next_link'] = 'Next →';
      $config['next_tag_open'] = '<li class="next page">';
      $config['next_tag_close'] = '</li>';

      $config['prev_link'] = '← Previous';
      $config['prev_tag_open'] = '<li class="prev page">';
      $config['prev_tag_close'] = '</li>';

      $config['cur_tag_open'] = '<li class="active"><a href="">';
      $config['cur_tag_close'] = '</a></li>';

      $config['num_tag_open'] = '<li class="page">';
      $config['num_tag_close'] = '</li>';


      $this->pagination->initialize($config);
       
      $query = $this->paginationdata->getClientInfo(5,$this->uri->segment(2));
      
      $data['client_info'] = null;
      
      if($query){
       $data['client_info'] =  $query;
      }

      $this->load->view('pagination.php', $data);
    }
  } 
?>
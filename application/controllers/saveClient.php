<?php 
  //session_start();

   class saveClient extends CI_Controller {  
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
      $this->load->model('client','',TRUE);

      $uploadData = array();
    }

    public function index() {
    	//Get form Data
      if ($this->input->post('submit')==false){

        $now = new DateTime ( NULL, new DateTimeZone('GMT+5:30'));
        $upload['first_name'] = $this->input->post('first_name');
        $upload['last_name'] = $this->input->post('last_name');
        $upload['project'] = $this->input->post('project');
        $upload['type'] = $this->input->post('department');
        $upload['status'] = $this->input->post('status');
        $upload['progress'] = $this->input->post('progress');
        $upload['remarks'] = $this->input->post('remarks');
        $upload['started_at'] = $now->format('Y-m-d H:i:s');

        $data = $this->do_upload();
        $upload['file'] = $data['file_name'];

        $this->client->saveClient($upload);
      }
    }

    public function do_upload()
    {
      
      $file = rand(10,100000)."-".$_FILES['userfile']['name'];
      $new_file_name = strtolower($file);
      $final_file=str_replace(' ','-',$new_file_name);
   
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'txt|doc|docx|pdf';
      $config['file_name'] = $final_file;

      $this->load->library('upload', $config);


      if (!$this->upload->do_upload('userfile'))
      {
        $error = array('error' => $this->upload->display_errors());
 
        $this->load->view('add_client', $error['error']);
      }
      else
      {
        $this->upload->do_upload();
        $data = $this->upload->data();
        return $data;
        //$this->load->view('home_view');
      }
    }
  } 
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class AnalyticsController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->model('Service_Category_Model');

    }

    
    	public function national()
	{
      // $pagee = $this->uri->segment(1);
      $page['page'] =$this->uri->segment(1);
      $this->load->view('admin/common', $page);
	}



public function regional()
  {
      // $pagee = $this->uri->segment(1);
      $page['page'] =$this->uri->segment(1);
      $this->load->view('admin/common', $page);
  }



public function district()
  {
      // $pagee = $this->uri->segment(1);
      $page['page'] =$this->uri->segment(1);
      $this->load->view('admin/common', $page);
  }



public function hospital()
  {
      // $pagee = $this->uri->segment(1);
      $page['page'] =$this->uri->segment(1);
      $this->load->view('admin/common', $page);
  }

    


    
}

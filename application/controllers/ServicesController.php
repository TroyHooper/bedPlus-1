
<?php
defined('BASEPATH') or exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class ServicesController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('ServiceModel');
        //$this->load->model('Service_Category_Model');

    }

    
    	public function index()
	{

        if($this->session->userdata('logged_in') && $this->session->userdata('logged_in')['hospData']=='on') {
                   // $pagee = $this->uri->segment(1);
      $page['allservice']=$this->ServiceModel->getservices();
      $page['page'] =$this->uri->segment(1);
      $this->load->view('admin/common', $page);
    } else {
      //If no session, redirect to login page
      redirect('login', 'refresh');
    }



     
	}

    public function create()
    {

      $check= $this->ServiceModel->checkserviceexist();
      if($check[0]['serviceName']>0){
        $result="exist";
        echo json_encode($result);
      }else{
         $result=$this->ServiceModel->create();
         echo json_encode($result);
      }
   
    
    }



          public function edit()
    {
        $output;
             $oldname=$this->input->post('servicenameold');
             $newname=$this->input->post('serviceName');
             if($oldname===$newname){
                $output=  $this->ServiceModel->updateservice($newname);
             }
             else{

                 $check= $this->ServiceModel->checkserviceexist();
                  if($check[0]['serviceName']>0){
                    $output="exist";
                    
                  }else{
                     $output=$this->ServiceModel->updateservice($newname);
                    
                  }

             }
             echo json_encode($output);
    
    }

    

      function delete_enable_disable(){

        $action_type=$this->input->post('crudtype');
        $output;
        if($action_type==='delete'){
         $output=   $this->ServiceModel->deleteservice();
        }else if($action_type==='enable'){
          $output= $this->ServiceModel->enableservice();

        }
        else if($action_type==='disable'){
         $output=  $this->ServiceModel->disableservice();
        }
        if($output===true){
             $notification = array(
                'message' => 'Service '.$action_type. ' successful',
                'alert-type' => 'success'
            );
         }else if($output==="exist"){
            $notification = array(
                'message' => 'Service Name Already Exist',
                'alert-type' => 'info'
            );
         }else{
             $notification = array(
                'message' => 'Service '.$action_type. ' Failed',
                'alert-type' => 'error'
            );
         }
        

            $this->session->set_flashdata($notification);
            redirect('Services');
    }

    


    
}

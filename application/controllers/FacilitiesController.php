<?php
defined('BASEPATH') or exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class FacilitiesController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('OnboardingModel', '', TRUE);
        //$this->load->model('Service_Category_Model');  

    }


    public function index()
    {


        if($this->session->userdata('logged_in') &&  $this->session->userdata('logged_in')['hospData']=='on') {
                  // $pagee = $this->uri->segment(1);
        $page['page'] = $this->uri->segment(1);
        $page['allfacilities'] = $this->OnboardingModel->getfacility();

        $page['procedureResult'] = $this->OnboardingModel->mystoredprocedureExe();


        // var_dump($page['procedureResult']); die;

        $values = explode("|", $this->OnboardingModel->mystoredprocedureExe()[0]['analyticsString']);

        // var_dump($values); die;


        $page['analytics'] = $values;


        $this->load->view('admin/common', $page);
     
    } else {
      //If no session, redirect to login page
      redirect('login', 'refresh');
    }


   //68|73|1|

    // 23|73|1|
    // 4|0|0|
    // 4|0|0|
    // 0|0|0|
    // 0|0|0|
    // 5|0|0|
    // 6|0|0|
    // 5|0|0|
    // 0|0|0|
    // 0|0|0|
    // 0|0|0|
    // 0|0|0|
    // 0|0|0|
    // 5|0|0|
    // 5|0|0|
    // 0|0|8|

    // 2|0|0|3|2|53

       
    }


    function insert_user($address)
    {
        $stored_proc = "CALL spFacilitiesAnalytics(?, ?, ?, ?)";
        $data = array('address' => $address);
        $result = $this->db->query($stored_proc, $data);
        if ($result !== NULL) {
            return TRUE;
        }
        return FALSE;
    }



    function edit_delete_enable_disable_reset()
    {

        $action_type = $this->input->post('crudtype');
        // $output;
        if ($action_type === 'delete') {
            $output =   $this->OnboardingModel->deletefacility();
        } else if ($action_type === 'enable') {
            $output = $this->OnboardingModel->enablefacility();
        } else if ($action_type === 'disable') {
            $output =  $this->OnboardingModel->disablefacility();
        } else if ($action_type === 'update') {

            $output =  $this->OnboardingModel->updatefacility();

            // var_dump($output); die;
        }
        if ($output === true) {
            $notification = array(
                'message' => 'Facility ' . $action_type . ' successful',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Facility ' . $action_type . ' Failed',
                'alert-type' => 'error'
            );
        }


        $this->session->set_flashdata($notification);
        redirect('Facilities');
    }
}

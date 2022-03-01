<?php
defined('BASEPATH') or exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class LoginController extends CI_Controller 
{


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('UserModel');
		//$this->load->model('Service_Category_Model');
	}

	var $output;

	public function index()
	{
		$page['page']  = 'login';
		$page['pageUrl']  = 'login';
		$page['pagetitle'] = 'Management Login';
		$this->load->view('admin/views/' . $page['page'], $page);
	}

	public function forgotpassword()
	{
		$page['page']  = 'forgotpassword';
		$page['pageUrl']  = 'forgotpassword';
		$page['pagetitle'] = 'Management Login';
		$this->load->view('admin/views/' . $page['page'], $page); 
	}

	public function shasha512(){

	   $password=trim($this->session->userdata('logged_in')['userEmail']).trim($this->input->post("oldpass"));
       $passwordToken = hash('sha512', $password);
      if($passwordToken===$this->session->userdata('logged_in')['LoginToken']){
            echo json_encode(true);
        }else{
        	echo json_encode(false);
        }

	}


	public function change_password()
{

	   // var_dump($this->input->post("pagenamepagename")); die;
       $password=trim($this->session->userdata('logged_in')['userEmail']).trim($this->input->post("newpass"));

       $passwordToken = hash('sha512', $password);
       $id=$this->session->userdata('logged_in')['login_id'];

       $output=$this->UserModel->updatepassword($passwordToken,$id);
       if($output===true){
             $notification = array(
                'message' => 'Your Password Has Been Updated Successfully',
                'alert-type' => 'success'
            );
         }else{
             $notification = array(
                'message' => 'Your Password Update Failed',
                'alert-type' => 'error'
            );
         }
        

            $this->session->set_flashdata($notification);
            redirect($this->input->post('pagenamepagename'));
      


    

    
}





	public function unlockuser($userid)
	{
		$data = array(
			'isLogin' => 0
		);
		$this->db->set($data);
		$this->db->where('id', $userid);
		$this->db->update("login", $data);
	}


	function logout()
	{

		if ($this->session->userdata('logged_in')) {

			$session_data = $this->session->userdata('logged_in');
			$this->session->unset_userdata('logged_in');
			//session_destroy();
			 $notification = array(
		                'message' => 'Logout Successful',
		                'alert-type' => 'info'
		            );
		            $this->session->set_flashdata($notification);
			redirect('login', 'refresh');
		}
	}
}

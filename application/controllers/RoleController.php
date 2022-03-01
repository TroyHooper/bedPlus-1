<?php
defined('BASEPATH') or exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class RoleController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        // $this->load->model('User', '', TRUE);
        $this->load->model('RoleModel', '', TRUE);
        $this->load->model('UserModel');
        // $this->load->model('UserModel', '', TRUE);
        // $this->load->model('RoleModel', '', TRUE);

    }


    public function index()
    {

        if($this->session->userdata('logged_in') && $this->session->userdata('logged_in')['userMan']=='on') {
                   // $pagee = $this->uri->segment(1);
              $page['getusedroles'] = count($this->UserModel->getusedroles());

        $page['activeroles'] = $this->RoleModel->getactiveRoles();

        $page['allroles'] = $this->RoleModel->getRoles();

        $page['page'] = $this->uri->segment(1);
        $this->load->view('admin/common', $page);



     
    } else {
      //If no session, redirect to login page
      redirect('login', 'refresh');
    }


      
    }



    public function create()
    {

        $check = $this->RoleModel->checkroleexist();
        if ($check[0]['checkrole'] > 0) {
            $result = "exist";
            echo json_encode($result);
        } else {
            $result = $this->RoleModel->create();
            echo json_encode($result);
        }
    }

    public function edit()
    {
        $output;
        $oldname = $this->input->post('rolenameold');
        $newname = $this->input->post('rolename');
        if ($oldname === $newname) {
            $output =  $this->RoleModel->updaterole($newname);
        } else {

            $check = $this->RoleModel->checkroleexist();
            if ($check[0]['checkrole'] > 0) {
                $output = "exist";
            } else {
                $output = $this->RoleModel->updaterole($newname);
            }
        }
        echo json_encode($output);
    }

    function edit_delete_enable_disable()
    {

        $action_type = $this->input->post('crudtype');
        $output;
        if ($action_type === 'delete') {
            $output =   $this->RoleModel->deleterole();
        } else if ($action_type === 'enable') {
            $output = $this->RoleModel->enablerole();
        } else if ($action_type === 'disable') {
            $output =  $this->RoleModel->disablerole();
        }
        // else if($action_type==='edit'){
        //     $oldname=$this->input->post('editeditedit');
        //      $newname=$this->input->post('rolenameedit');
        //      if($oldname===$newname){
        //         $output=  $this->RoleModel->updaterole();
        //      }
        //      else{
        //         $check= $this->RoleModel->checkroleexist();
        //          $output="exist";
        //      }
        //      echo json_encode($output); 

        // }
        if ($output === true) {
            $notification = array(
                'message' => 'Role ' . $action_type . ' successful',
                'alert-type' => 'success'
            );
        } else if ($output === "exist") {
            $notification = array(
                'message' => 'Role Name Already Exist',
                'alert-type' => 'info'
            );
        } else {
            $notification = array(
                'message' => 'Role ' . $action_type . ' Failed',
                'alert-type' => 'error'
            );
        }


        $this->session->set_flashdata($notification);
        redirect('Roles');
    }


    // getRoles


    public function roles()
    {
        $pagee = $this->uri->segment(1);

        //            var_dump($this->uri->segment(1)); die;
        $page['page'] = $this->uri->segment(1);
        $this->load->view('admin/common', $page);
    }

    public function send_mail()
    {
        $name = $this->input->post('lastname') . "  " . $this->input->post('firstname') . " (" . $this->input->post('phone') . ")";
        $email = $this->input->post('email');
        $message = $this->input->post('message');

        require_once(APPPATH . 'third_party/PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->IsSMTP(); /* we are going to use SMTP */
        $mail->SMTPAuth   = true; /* enabled SMTP authentication */
        $mail->SMTPSecure = "ssl";  /* prefix for secure protocol to connect to the server */
        $mail->Host       = "smtp.gmail.com";      /* setting GMail as our SMTP server */
        $mail->Port       = 465;                   /* SMTP port to connect to GMail */
        $mail->Username   = "emmagbin@gmail.com";  /* user email address */
        $mail->Password   = "0249273086";            /* password in GMail */
        $mail->SetFrom($email);  /* Who is sending */
        $mail->isHTML(true);
        $mail->Subject    = "From Website";
        $mail->Body      = 'From ' . $name . '<br>' . $message;
        $destino = "emmagbin@gmail.com"; // Who is addressed the email to
        $mail->AddAddress($destino, "Receiver");
        if (!$mail->Send()) {
            $notification = array(
                'message' => 'Error Please Try Again',
                'alert-type' => 'warning'
            );
        } else {
            $notification = array(
                'message' => 'Your mail has successfully been sent',
                'alert-type' => 'success'
            );
        }
        $this->session->set_flashdata($notification);
        redirect('contact');
    }
}

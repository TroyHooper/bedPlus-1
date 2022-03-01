
<?php
defined('BASEPATH') or exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class UsersController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('UserModel');
    // $this->load->model('RoleModel');


    $this->load->model('RoleModel', '', TRUE);
  }

  public function index()
  {
    // var_dump($this->session->userdata('logged_in')['userFullName']); die;

     if ($this->session->userdata('logged_in') &&  $this->session->userdata('logged_in')['userMan']=='on') {
      // $session_data = $this->session->userdata('logged_in');
      // // $users['id'] = $session_data['login_id'];
      // // $users['userEmail'] = $session_data['userEmail'];
      // // $users['userFullName'] = $session_data['userFullName'];
      // // $users['roleName'] = $session_data['roleName'];



      $pagee = $this->uri->segment(1);
      if ($pagee == "") {
        $pagee = 'login';
      }


      $page['allusers'] = $this->UserModel->getusers();
      $page['pageinfo'] = $this->UserModel->userpageinfo();
      $page['activeroles'] = $this->RoleModel->getactiveRoles();





      $page['page'] = $pagee;
      $this->load->view('admin/common', $page);
    } else {
      //If no session, redirect to login page
      redirect('login', 'refresh');
    }
  }


  public function create()
  {


    $password = trim($this->input->post('email')) . trim($this->input->post('contact'));
    $passwordToken = hash('sha512', $password);

    $check = $this->UserModel->checkuserexist();


    if ($check[0]['checkrole'] > 0) {
      $result = "exist";
      echo json_encode($result);
    } else {
      $result = $this->UserModel->create($passwordToken);
      echo json_encode($result);
    }
  }


  function edit_delete_enable_disable_reset()
  {

    $action_type = $this->input->post('crudtype');
    $output;
    if ($action_type === 'delete') {
      $output =   $this->UserModel->deleteuser();
    } else if ($action_type === 'enable') {
      $output = $this->UserModel->enableuser();
    } else if ($action_type === 'disable') {
      $output =  $this->UserModel->disableuser();
    } else if ($action_type === 'reset') {
      $output =  $this->UserModel->resetuser();
    } else if ($action_type === 'update') {

      $output =  $this->UserModel->updateuser();
    }
    if ($output === true) {
      $notification = array(
        'message' => 'User ' . $action_type . ' successful',
        'alert-type' => 'success'
      );
    } else {
      $notification = array(
        'message' => 'Users ' . $action_type . ' Failed',
        'alert-type' => 'error'
      );
    }


    $this->session->set_flashdata($notification);
    redirect('Users');
  }









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

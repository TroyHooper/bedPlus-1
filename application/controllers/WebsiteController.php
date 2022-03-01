
<?php
defined('BASEPATH') or exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class websiteController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->model('Service_Category_Model');

    }

    public function index()
    {

        $pagee = $this->uri->segment(1);
      if($pagee==""){
            $pagee='login';
        }
        $page['page'] = $pagee;
        $this->load->view('web/common', $page);

    }



       public function send_mail()
    {

        
        
        

        
        
 $name = $this->input->post('lastname')."  ". $this->input->post('firstname')." (". $this->input->post('phone').")";
 $email = $this->input->post('email');
  $message = $this->input->post('message');

        require_once(APPPATH.'third_party/PHPMailer/PHPMailerAutoload.php');
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
        $mail->Body      ='From '. $name.'<br>'.$message;
        $destino = "emmagbin@gmail.com"; // Who is addressed the email to
        $mail->AddAddress($destino, "Receiver");
        if(!$mail->Send()) {
            $notification = array(
                'message' => 'Error Please Try Again',
                'alert-type' => 'warning'
            );
        } 
    else
        {
            $notification = array(
                'message' => 'Your mail has successfully been sent',
                'alert-type' => 'success'
            );

        }
        $this->session->set_flashdata($notification);
        redirect('contact');    


    }



    
}

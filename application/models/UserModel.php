<?php
class UserModel extends CI_Model
{


   var $tablename = 'userAccounts';
   var  $jointable = 'roles';



   function login($logintoken)
   {

      $queryroles = $this->db->query("select " . $this->tablename . ".*," . $this->jointable . ".* from " . $this->tablename . " inner join " . $this->jointable . " on " . $this->tablename . ".roleID=" . $this->jointable . ".roleID" . " where " . $this->tablename . ".LoginToken= '$logintoken' 
     and  userAccounts.accountStatus='A'");
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


   public function getusedroles()
   {

      $queryroles = $this->db->query("select distinct(roleID) from " . $this->tablename);
      return $queryroles->result();
   }




   function getusers()
   {
      $queryroles = $this->db->query("select " . $this->tablename . ".*," . $this->jointable . ".roleName from " . $this->tablename . " inner join " . $this->jointable . " on " . $this->tablename . ".roleID=" . $this->jointable . ".roleID ");
      return $queryroles->result();
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

   // function resetuser(){

   // }

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




   public function create($passwordToken)
   {



      $data = array(

         'userEmail' => $this->input->post('email'),
         'userFullName' => $this->input->post('fullname'),
         'LoginToken' => $passwordToken,
         'roleID' => $this->input->post('fromrole'),
         'accountStatus' => 'A',
         'Sex' => $this->input->post('gender'),
         'contact' => $this->input->post('contact'),
         'CreatedBy' => "develper",
         'CreatedOn' => date("Y-m-d"),

      );
      return $this->db->insert($this->tablename, $data);
   }


   public function checkuserexist()
   {
      $userEmail = trim($this->input->post('email'));
      $query = $this->db->query("select count(*) as checkrole FROM " . $this->tablename . " WHERE userEmail='$userEmail' ");
      $result = $query->result_array();
      return $result;
   }
}

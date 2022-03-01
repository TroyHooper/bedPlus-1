<?php
class RoleModel extends CI_Model
{

   var $tablename = 'roles';




   public function deleterole()
   {
      $this->db->WHERE('roleID', $this->input->post('roleid'));
      return $this->db->delete($this->tablename);
   }

   public function disablerole()
   {
      $data = array(
         'roleStatus' => 'D',
         'lastUpdatedOn' => date("Y-m-d"),
      );
      $this->db->set($data);
      $this->db->where('roleID', $this->input->post('roleid'));
      return   $this->db->update($this->tablename, $data);
   }


   function get_rooms_beds_graph()
   {

      $hospital = $this->session->userdata('logged_in')['hospCode'];

      $queryroles = $this->db->query("SELECT
      (
SELECT sum(bedsNumber) FROM  roomBeds where hospCode='$hospital' ) as totalbeds,
(SELECT sum(activeBedsNumber) FROM roomBeds where hospCode='$hospital') as activebeds,
(SELECT count(*) FROM roomBeds where hospCode='$hospital') as active,
(SELECT count(*) FROM roomBeds where hospCode='$hospital') as disactive ");
      return $queryroles->result_array();
   }



   public  function enablerole()
   {
      $data = array(
         'roleStatus' => 'A',
         'lastUpdatedOn' => date("Y-m-d"),
      );
      $this->db->set($data);
      $this->db->where('roleID', $this->input->post('roleid'));
      return   $this->db->update($this->tablename, $data);
   }

   public function updaterole($newname)
   {
      $data = array(

         'roleName' => $newname,
         'roleStatus' => 'A',
         'lastUpdatedOn' => date("Y-m-d"),
         'userMan' => $this->input->post('userMan'),
         'hospData' => $this->input->post('hospData'),
         'bedUtilization' => $this->input->post('bedUtilization'),
      );
      $this->db->set($data);
      $this->db->where('roleID', $this->input->post('roleid'));
      return   $this->db->update($this->tablename, $data);
   }



   public function create()
   {
      $data = array(

         'roleName' => $this->input->post('rolename'),
         'roleStatus' => 'A',
         'CreatedBy' => 'developer',
         'CreatedOn' => date("Y-m-d"),
         'userMan' => $this->input->post('userMan'),
         'hospData' => $this->input->post('hospData'),
         'bedUtilization' => $this->input->post('bedUtilization'),
      );
      return $this->db->insert($this->tablename, $data);
   }



   function getRoles()
   {
      $queryroles = $this->db->query("select * from roles");
      return $queryroles->result();
   }

   public   function getactiveRoles()
   {
      $roleStatus = "D";
      // $queryroles = $this->db->query("select roleName,roleID from ".$this->tablename." where roleStatus!='$roleStatus' ");
      // return $queryroles->result();
      $query = $this->db->query("SELECT roleName,roleID FROM " . $this->tablename . " where roleStatus!='$roleStatus' ");
      // return $query->result();
      return $query->result_array();
   }



   public function checkroleexist()
   {
      $rolename = trim($this->input->post('rolename'));
      $query = $this->db->query("select count(*) as checkrole FROM " . $this->tablename . " WHERE rolename='$rolename' ");
      $result = $query->result_array();
      return $result;
   }




   function login($logintoken)
   {
      $status = 0;
      $this->db->select(' id ');
      $this->db->from('login');
      $this->db->where('password', $logintoken);
      $this->db->where('status', $status);

      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {

         $login_id = $query->result_array();
         $id = $login_id[0]['id'];
         $query = $this->db->query("select staff.*,login.username,login.logincount,login.password,login.role  FROM staff inner join login on login.id=staff.login_id WHERE login_id='$id' ");
         $result = $query->result();
         return $result;
      } else {
         return false;
      }
   }


   public function menucheck($roleid)
   {
      $query = $this->db->query("SELECT(
SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='dashboard' and roleprivilege.rolename='$roleid') as dashboard,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='customerservice' and roleprivilege.rolename='$roleid') as customerservice,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='operation' and roleprivilege.rolename='$roleid') as operation,

(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='fleetexpenses' and roleprivilege.rolename='$roleid') as fleetexpenses,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='fleetexpensestype' and roleprivilege.rolename='$roleid') as fleetexpensestype,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='fleetcategory' and roleprivilege.rolename='$roleid') as fleetcategory,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='fleetdocumenttype' and roleprivilege.rolename='$roleid') as fleetdocumenttype,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='fleetdocument' and roleprivilege.rolename='$roleid') as fleetdocument,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='fleet' and roleprivilege.rolename='$roleid') as fleet,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='drivervehiclelink' and roleprivilege.rolename='$roleid') as drivervehiclelink,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='driversriders' and roleprivilege.rolename='$roleid') as driversriders,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='invoices' and roleprivilege.rolename='$roleid') as invoices,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='payments' and roleprivilege.rolename='$roleid') as payments,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='expenses' and roleprivilege.rolename='$roleid') as expenses,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='users' and roleprivilege.rolename='$roleid') as users,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='rolesprivileges' and roleprivilege.rolename='$roleid') as rolesprivileges,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='reports' and roleprivilege.rolename='$roleid') as reports,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='companysettings' and roleprivilege.rolename='$roleid') as companysettings,
(SELECT count(*) FROM roleprivilege where (roleprivilege.read=1 OR roleprivilege.write=1 OR roleprivilege.update=1 OR roleprivilege.disable=1 OR roleprivilege.enable=1) and roleprivilege.module='profile' and roleprivilege.rolename='$roleid') as profile ");
      return $query->result_array();
   }


   public function insertUser($login_id)
   {

      $passwordCombination = $this->input->post('username') . $this->input->post('password');
      $passwordToken = hash('sha512', $passwordCombination);

      $logindata = array(
         'password' => $passwordToken,
         'username' => $this->input->post('username'),
         'logincount' => 0,
         'role' => $this->input->post('role'),
         'createdby' => $login_id,
      );
      if ($this->db->insert("login", $logindata)) {
         $insert_id = $this->db->insert_id();
         $data = array(
            'login_id' => $insert_id,
            'lastname' => $this->input->post('lastname'),
            'othernames' => $this->input->post('othernames'),
            'position' => $this->input->post('position'),
            'email' => $this->input->post('email'),
            'dob' => $this->input->post('dob'),
            'gender' => $this->input->post('gender'),
            'phonenumner' => $this->input->post('phonenumner'),
            'homeaddress' => $this->input->post('homeaddress'),
            'createdby' => $login_id,


         );
         if ($this->db->insert("staff", $data)) {
            return true;
         } else {
            return false;
         }
      } else {
         return false;
      }
   }

   public function update_user($login_id)
   {
      $logindata = array(
         'role' => $this->input->post('role'),
         'updatedby' => $login_id,
      );


      $this->db->set($logindata);
      $this->db->where('id', $this->input->post('txtlogin_id'));
      $this->db->update('login', $logindata);

      $data = array(
         'lastname' => $this->input->post('lastname'),
         'othernames' => $this->input->post('othernames'),
         'position' => $this->input->post('position'),
         'email' => $this->input->post('email'),
         'dob' => $this->input->post('dob'),
         'gender' => $this->input->post('gender'),
         'phonenumner' => $this->input->post('phonenumner'),
         'homeaddress' => $this->input->post('homeaddress'),
         'updatedby' => $login_id,


      );
      // return $data;
      $this->db->set($data);
      $this->db->where('login_id', $this->input->post('txtlogin_id'));
      $this->db->update('staff', $data);
   }



   public function enable_disable_user($login_id)
   {



      if ($this->input->post('enabledisable') === 'disable') {
         $status = "Approved";
         $data = array(
            'status' => 0,
            'updatedby' => $login_id,
         );
         $this->db->set($data);
         $this->db->where('id', $this->input->post('id'));
         $this->db->update('login', $data);
      } elseif ($this->input->post('enabledisable') === 'enable') {
         $status = "Pending";
         $data = array(
            'status' => 1,
            'updatedby' => $login_id,
         );
         $this->db->set($data);
         $this->db->where('id', $this->input->post('id'));
         $this->db->update('login', $data);
      } elseif ($this->input->post('enabledisable') === 'reset') {
         $passwordCombination = $this->input->post('username') . $this->input->post('newpass');
         $passwordToken = hash('sha512', $passwordCombination);
         $data = array(
            'password' => $passwordToken,
            'updatedby' => $login_id,
         );
         $this->db->set($data);
         $this->db->where('id', $this->input->post('id'));
         $this->db->update('login', $data);
      }
      return true;
   }




   public function checklogincount($login_id)
   {
      if ($login_id === 0) {
         return number_format(10);
      } else {
         $query = $this->db->query("select logincount from login where id='$login_id' ");
         $logincountt = $query->result_array();
         return number_format($logincountt[0]['logincount']);
      }
   }
   public function checkUser($checkusername)
   {

      $query = $this->db->query("select count(*) as number FROM `login` WHERE username='$checkusername' ");
      $result = $query->result_array();
      return $result;
   }

   //  $this->User->changepasswordUser($session_data['login_id'], $passwordToken_new);

   public function changepasswordUser($login_id, $passwordToken_new)
   {

      $changepass = array(
         'password' => $passwordToken_new,
         'logincount' => 10,
         'createdby' => $login_id,
      );

      $this->db->set($changepass);
      $this->db->where('id', $login_id);
      return   $this->db->update("login", $changepass);
   }
   function updateLogin($user_id)
   {

      $data = array(
         'isLogin' => 1
      );
      $this->db->set($data);

      // $this->db->where('id', $this->input->post('user_id'));
      $this->db->where('id', $user_id);
      return   $this->db->update("login", $data);
   }

   function updateLogin_1($user_id)
   {

      $data = array(
         'isLogin' => 0
      );
      $this->db->set($data);

      // $this->db->where('id', $this->input->post('user_id'));
      $this->db->where('id', $user_id);
      return   $this->db->update("login", $data);
   }


   function userRoles()
   {
      $queryroles = $this->db->query("select roleName from roles ");
      // $page['resultroles'] = 
      return $queryroles->result_array();
   }

   function get_staffs()
   {
      $queryroles = $this->db->query("SELECT staff.*,login.status as activeStatus, login.username,(SELECT CONCAT(staff.lastname,' ',staff.othernames)
      from staff where staff.createdby=staff.login_id)as creator, roles.rolename FROM `staff` inner JOIN login on staff.login_id=login.id INNER join roles on roles.id=login.role");
      // $page['resultroles'] = 
      return $queryroles->result();
   }


   public  function userPrivileges($rolename)
   {
      $query = $this->db->query("select * FROM `roleprivilege` WHERE rolename='$rolename' ");
      $result = $query->result();
      return $result;
   }
}

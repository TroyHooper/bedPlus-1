<?php
class ServiceModel extends CI_Model
{


 var $tablename = 'services';
// var  $jointable='roles';



    function getservices()
   {

     $query= $this->db->query("select * from ".$this->tablename."");
      return $query->result();
   }

   function userpageinfo(){

      $queryroles = $this->db->query("SELECT(
SELECT count(*) FROM ".$this->tablename." where Sex='Male') as male,
(SELECT count(*) FROM ".$this->tablename." where Sex='Female') as female,
(SELECT count(*) FROM ".$this->tablename." where accountStatus='A') as active,
(SELECT count(*) FROM ".$this->tablename." where accountStatus='D') as disactive ");
      return $queryroles->result_array();

      
   }

      // function resetuser(){

      // }

           public function deleteservice()
        {
         $this->db->WHERE('id',$this->input->post('serviceid'));
        return $this->db->delete($this->tablename);               
        }

       public function disableservice(){
           $data = array(
         'serviceStatus' => 'D',
        
      );
      $this->db->set($data);
      $this->db->where('id', $this->input->post('serviceid'));
      return   $this->db->update($this->tablename, $data);

        }

      public  function enableservice(){
           $data = array(
        'serviceStatus' => 'A',
      );
         $this->db->set($data);
         $this->db->where('id', $this->input->post('serviceid'));
         return   $this->db->update($this->tablename, $data);

        }

        public function updateservice($newname)
        {
         $data = array(
           'serviceName' => $newname,
          );
          $this->db->set($data);
         $this->db->where('id', $this->input->post('serviceid'));
         return   $this->db->update($this->tablename, $data);
        }




    public function create()
        {
         $data = array(
            
            'serviceName' => $this->input->post('serviceName'),
            'serviceStatus' =>'A',           
          );
           return $this->db->insert($this->tablename, $data);
        }


   public function checkserviceexist()
   {
      $serviceName=trim($this->input->post('serviceName'));
      $query = $this->db->query("select count(*) as serviceName FROM ".$this->tablename." WHERE serviceName='$serviceName' ");
      $result = $query->result_array();
      return $result;
   }




   
}

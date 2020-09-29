<?php
class User_model extends CI_model
{
     public function create($formArray)
    {
       $this->db->insert("userdb",$formArray);
    }
      public function all()
    {
      return $userdb = $this->db->get('userdb')->result_array();
    }
    public function getUser($userId) {
         $this->db->where('ID',$userId);
         return $this->db->get('userdb')->row_array();

    }
    public function updateUser($userId,$formArray)
    {
     $this->db->where('ID',$userId);
     $this->db->Update('userdb',$formArray);

    }
     public function deleteUser($userId)
    {
         $this->db->where('ID',$userId);
         $this->db->delete('userdb');
    }
}
?>

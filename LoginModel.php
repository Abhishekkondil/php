<?php
class LoginModel extends CI_Model
{
    public function login($name,$password)
    {
        $this->db->select('name','password');
        $this->db->from('signin');
        $this->db->where('name',$name);
        $this->db->where('password',$password);
        
        $query=$this->db->get();
        
        if ($query->num_rows()==1)
        {
          return TRUE  ;
        }else{
           return FALSE;
        }
        
    }
}
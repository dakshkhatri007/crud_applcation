<?php
class user_model extends CI_Model{

  public function create($formArray) {

        $this->db->insert("users", $formArray); //Insert into users 
    }

    public function all(){
        
        return $users = $this->db->get('users')->result_array(); //SELECT * from users 
    }

    public function getuser($userID){
        $this->db->where('user_id',$userID);
        return $this->db->get('users')->row_array(); //SELECT * from users where user_id = ?
    }

    public function updateuser($userID, $formArray){
        $this->db->where('user_id',$userID);
        $this->db->update('users',$formArray); // update users SET names = ?, email = ? where user_id = ?

    }

    public function deleteUser($userID){
        $this->db->where('user_id',$userID);
        $this->fb->delete('users'); //DELETE FROM users Where user_id = ? 
    }
}


?>
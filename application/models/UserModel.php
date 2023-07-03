<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Controller {
    public function get_users_data(){
        $sql="select * from users";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function insert_into_user_table_sql($F_name, $L_name, $salary){
        $data = array(
            "first_name" => $F_name,
            "last_name" => $L_name,
            "salary" => $salary
            
        );
        $this->db->insert('users', $data);
    }
    public function delete_sql($id){
       $sql=" DELETE FROM users WHERE id =$id";
        $this->db->query($sql);
    }
    public function update_sql_users($id,$first_name,$last_name,$salary){
        $sql="UPDATE users SET first_name='$first_name',last_name='$last_name',salary=$salary WHERE id =$id";
        $this->db->query($sql);
    }
    public function get_users_data_by_id($id){
        $sql="select * FROM users WHERE id =$id";
        $query = $this->db->query($sql);
        return $query->result();
    }


}
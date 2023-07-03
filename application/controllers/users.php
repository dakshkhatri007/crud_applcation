<?php
class Users extends CI_Controller{

    public function index(){ //this method is to show users record 
        $this->load->model('user_model');
        $users = $this->user_model->all();
        $data = array();
        $data['users'] = $users;
        $this->load->view('list',$data);
}

    public function create(){

        $this->load->model('user_model');
        $this-> form_validation -> set_rules('name','Name','required');
        $this-> form_validation -> set_rules('email','email','required|valid_email');

        if($this -> form_validation ->run() == false){
            $this->load->view('create');
        } else {
            // save record to database
            // $formArray = array();
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $formArray = array('Name'=>$name,
        'email'=>$email);
            $this->load->model('user_model');
            $this->user_model->create($formArray);
            $this->session->set->flashdata('success','Record added successfully');
            redirect(base_url().'index.php/users/create');
        }
        
        
    }

    public function edit($userID){
        $this->load->model('user_model');
        $users = $this->user_model->getuser($userID);
        // var_dump($users);die();
        $data = array();
        $data['user'] = $users;

        $this->load->model('user_model');
        $this-> form_validation -> set_rules('name','Name','required');
        $this-> form_validation -> set_rules('email','email','required|valid_email');

        if($this->form_validation->run() == false){
            $this->load->view('edit',$data);
        } else {
            // update user record 
            $this->load->view('edit',$data);
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $this->user_model->updateuser($userID, $formArray);
            $this->session->set_flashdata('Successfully updated','Record updated successfully');
            redirect(base_url().'index.php/users/index/');
        }
    }

    public function delete($userID){

        $this->load->model('user_model');
        $user = $this->user_model->getuser($userID);

        if(empty($user)){
            $this->session->set_flashdata('failure','Record not found in database');
            redirect(base_url().'index.php/users/index/');
        }else{
        $this->load->deleteUser($userID);
        $this->session->set_flashdata('success','Record deteled successfully');
        redirect(base_url().'index.php/users/index/');
        }
        
    }
}

?>
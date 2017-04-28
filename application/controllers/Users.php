<?php
class Users extends CI_controller{

    public function index(){
        $this->load->model('Usermodel');
        $user=$this->Usermodel->getUsers();
        print_r($user);
    }

}
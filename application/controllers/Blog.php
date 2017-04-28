<?php
class Blog extends CI_Controller {
    public function index()
    {
        $this->load->database();
        $this->load->model('Blog_model');
        $data['h']=$this->Blog_model->display();
        //return the data in view
        $this->load->view('blogview', $data);
    }
    

}
?>
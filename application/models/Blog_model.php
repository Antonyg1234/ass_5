<?php
class Blog_model extends CI_Model{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    public function display(){
        $this->db->select('name, price, image,id');
        $query = $this->db->get('product');
        return $query;
    }

}
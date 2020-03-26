<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Browse_model');
    }

    public function browse(){
        $data['BrowseItems']=$this->Browse_model->get_products();
        $this->load->view('browse/show_items',$data);
      }
}
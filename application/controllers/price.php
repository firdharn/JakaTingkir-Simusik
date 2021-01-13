<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Price Extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('acara_model');
    }

    function beli()
    {	
        if($this->session->userdata('logged_in') == true)
        {
        $id = $this->uri->segment(3);
        $data['id'] = $id;
        $data['regular'] = $this->acara_model->getPriceRegular($id);
        $data['VIP'] = $this->acara_model->getPriceVIP($id);
        $data['VVIP'] = $this->acara_model->getPriceVVIP($id);
        $this->load->view('price', $data);
        }else{
            $this->load->view('login_user');
        }
    	
    }

}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Search Extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_cari');
        $this->load->model('acara_model');
    }

    function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');

        if($keyword == ''){
            redirect('admin/homey');
        } else {
            $data['acara']    =   $this->m_cari->search($keyword);
            $data['konten'] = 'konten_search_view';
            $data['jumpto'] = true;
            $this->load->view('home/index',$data);
        }
    }

}
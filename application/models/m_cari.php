<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
Class M_cari Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {
        $this->db->like('nama_acara', $keyword);
        $query  =   $this->db->get('acara');
        return $query->result();
    }
}   
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('email_model');
        $this->load->model('admin_model');
        $this->load->library('form_validation');
    }

    public function delete($id) 
    {
        $row = $this->email_model->get_detil($id);

      if ($row) {
            $this->email_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/data_email'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/data_email'));
        }
    }

      public function simpan() 
    {
        if ($this->input->post('submit')){
               
				if($this->email_model->insert() == TRUE){
					$this->session->set_flashdata('pesan', 'Terimakasih Sudah Subscribe !!');
            		redirect(site_url('admin/homey#newsletter'));


				}else{
					$this->session->set_flashdata('pesan', 'Coba Lagi');
            		redirect(site_url('admin/homey#newsletter'));
				}
        }
        
}
}
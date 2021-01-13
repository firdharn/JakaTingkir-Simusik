<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Acara extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Acara_model');
        $this->load->model('admin_model');
         $this->load->model('komentar_model');
        $this->load->library('form_validation');
        $this->notifikasi = $this->admin_model->cek_notif();

        $this->notifikasiCount = $this->admin_model->cek_jumlah_notif();
    }

    public function index()
    {
       if ($this->session->userdata('logged_in') == TRUE) {
            redirect(base_url('index.php/acara/data_acara'));
        } else {
            $this->load->view('login');
        }
       
        /*$this->load->view('acara/acara_list', $data);*/
    }

   
   public function data_acara() {
        if ($this->session->userdata('logged_in') == TRUE) {
            $data['main_view'] = 'acara/acara_list';
            $data['acara'] = $this->Acara_model->get_data_acara();
            $data['notif'] = $this->komentar_model->get_data_notif();
            $this->komentar_model->setDibaca();
            $data['notifikasi'] = $this->notifikasi;
            $data['notifikasi_count'] = $this->notifikasiCount;
            $this->load->view('template', $data);
        }else{
            $this->load->view('login');
        }
    }

    

    public function simpan() 
    {
                $data['notifikasi'] = $this->notifikasi;
                $data['notifikasi_count'] = $this->notifikasiCount;
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2000';

                //load library uploads fi;e
                $this->load->library('upload', $config);

                //jika upload file berhasil
                if($this->upload->do_upload('gambar'))
                {
                
                if($this->Acara_model->insert($this->upload->data()) == TRUE){

                    $this->session->set_flashdata('message', 'Create Record Success');
                    redirect(site_url('admin/data_acara'));
                    /*$data['main_view'] = 'acara/acara_list';
                    $this->load->view('template', $data);*/
                }else{
                    $this->session->set_flashdata('message', 'Create Record Failed');
                    $data['main_view'] = 'acara/acara_form';
                    $this->load->view('template', $data);
                }
                } else{
                $data['main_view'] = 'acara/acara_form';
                $data['message'] = $this->upload->display_errors();
                $this->load->view('template', $data);
            }    
    }

    public function update($id) 
    {
        
        $row = $this->Acara_model->get_detil($id);

        if ($row) {
            $data = array(
                 'button' => 'Update',
                'action' => site_url('acara/update_action'),
		'id_acara' => set_value('id_acara', $row->id_acara),
		'nama_acara' => set_value('nama_acara', $row->nama_acara),
		'tgl_acara' => set_value('tgl_acara', $row->tgl_acara),
		'alamat_acara' => set_value('alamat_acara', $row->alamat_acara),
		'waktu_acara' => set_value('waktu_acara', $row->waktu_acara),
		'gambar' => set_value('gambar', $row->gambar),
		'nama_genre' => set_value('nama_genre', $row->nama_genre),
	    );
        $data['notifikasi'] = $this->notifikasi;
        $data['notifikasi_count'] = $this->notifikasiCount;
        $data['main_view'] = 'acara/acara_edit';
        $this->load->view('template', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/data_acara'));
        }
    }
    
    public function update_action() 
    {
        if ($this->session->userdata('logged_in') == TRUE){
            $id_acara = $this->uri->segment(3);
                    if ($this->Acara_model->update_acara($id_acara) == TRUE) {
                          $this->session->set_flashdata('message', 'Update Berhasil');
                          redirect(site_url('admin/data_acara'));
                            # code...
                    } else{
                         $this->session->set_flashdata('message', 'gagal');
                        redirect(site_url('admin/data_acara'));
                    }
                    # code...
                
            
        }

                # code...
    }

      
    
    public function delete($id) 
    {
        $row = $this->Acara_model->get_detil($id);

        if ($row) {
            $this->Acara_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/data_acara'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/data_acara'));
        }
    }

    

}

/* End of file Acara.php */
/* Location: ./application/controllers/Acara.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-04 03:23:56 */
/* http://harviacode.com */
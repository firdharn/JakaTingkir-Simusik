<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* @property rating_model $rating_model */

class Rating extends CI_Controller{
    // default user and news id ,you can change


    function __construct()
    {
        parent::__construct();
        $this->load->model('rating_model');
        $this->load->model('admin_model');
        $data['rate'] = $this->rating_model->get_data_rating();
        //$this->load->view('detail_view', $data);
        
    }

    public function delete($id) 
    {
        $row = $this->rating_model->get_data_rating($id);

      if ($row) {
            $this->rating_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/data_rating'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/data_rating'));
        }
    }


    public function add(){
        if($this->input->post('submit')){
            $this->form_validation->set_rules('email', 'Email User', 'trim|required');
            $this->form_validation->set_rules('rating', 'Rating', 'trim|required');
            $this->form_validation->set_rules('Komentar', 'Komentar', 'trim|required');

            if($this->form_validation->run() == TRUE){
                if($this->rating_model->add() == TRUE){
                    redirect(base_url()."index.php/admin/homey".$this->input->post('id_rating'),'refresh');
                    } else{
                        $data['notif'] = 'Error!';
                }
            }
        }else{
            $data['notif'] = validation_errors();
            redirect(base_url()."index.php/admin/homey/".$this->input->post('id_rating'),'refresh');
        }
        
        }
    }

/* End of file dashboard.php */
/* Location: ./system/application/modules/matchbox/controllers/dashboard.php */
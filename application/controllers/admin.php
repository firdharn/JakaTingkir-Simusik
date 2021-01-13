<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	  public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('acara_model');
		$this->load->model('komentar_model');
		$this->load->model('email_model');
        $this->load->model('rating_model');
        $this->load->model('transaksi_model');
		$this->notifikasi = $this->admin_model->cek_notif();

		$this->notifikasiCount = $this->admin_model->cek_jumlah_notif();
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == true)
		{
			redirect(base_url('index.php/admin/home'));
		}else{
			$this->load->view('login');
		}
	}


	public function homey(){
		$data['acara'] = $this->acara_model->get_data_acara();
		$data['konten'] = 'konten_all_view';
		$this->load->view('home/index',$data);
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
                
                if($this->admin_model->insert($this->upload->data()) == TRUE){

                    $this->session->set_flashdata('message', 'Create Record Success');
                    redirect(site_url('admin/data_admin'));
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

    public function delete($id) 
    {
        $row = $this->admin_model->get_detil($id);

        if ($row) {
            $this->admin_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/data_admin'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/data_admin'));
        }
    }

       public function update($id) 
    {
        
        $row = $this->admin_model->get_detil($id);

        if ($row) {
            $data = array(
                 'button' => 'Update',
                'action' => site_url('admin/update_action'),
        'id' => set_value('id', $row->id),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
	    );
        $data['notifikasi'] = $this->notifikasi;
        $data['notifikasi_count'] = $this->notifikasiCount;
        $data['main_view'] = 'admin/admin_edit';
        $this->load->view('template', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/data_admin'));
        }
    }

     public function update_action() 
    {

          if ($this->session->userdata('logged_in') == TRUE){
            $id = $this->uri->segment(3);
            /*if ($this->input->post('submit')) {
                $this->form_validation->set_rules('id_acara', 'id_acara', 'trim|required');
                $this->form_validation->set_rules('nama_acara', 'nama_acara', 'trim|required');
                $this->form_validation->set_rules('tgl_acara', 'tgl_acara', 'trim|required');
                $this->form_validation->set_rules('alamat_acara', 'alamat_acara', 'trim|required');
                $this->form_validation->set_rules('waktu_acara', 'waktu_acara', 'trim|required');
                $this->form_validation->set_rules('nama_genre', 'nama_genre', 'trim|required');
                if ($this->form_validation->run() == TRUE) {*/
                    if ($this->admin_model->update($id) == TRUE) {
                          $this->session->set_flashdata('message', 'Update Berhasil');
                          redirect(site_url('admin/data_admin'));
                            # code...
                    } else{
                         $this->session->set_flashdata('message', 'gagal');
                        redirect(site_url('admin/data_admin'));
                    }
                    # code...
                
            
        }
       }

	public function login()
	{
		if ($this->input->post('submit')) 
			# code..
		
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run()==TRUE){
				if($this->admin_model->cek_user() == TRUE){
					redirect(base_url('index.php/admin/home'));
				}else{
					$data['notif'] = "Login Gagal";
					$this->load->view('login', $data);
			}
				}else{
			$data['notif'] = validation_errors();
			$this->load->view('login', $data);

	}
	}

    public function view_login(){
        $this->load->view('login_user');

    }  

    public function view_register()
    {
        $this->load->view('register');
    }

    public function approve_payment($id){
        $this->db->where('id_transaksi',$id)->update('transaksi',array(
            'status' => 1
        ));

        redirect(base_url('index.php/admin/data_transaksi'));
    }

    public function cancel_payment($id){
        $this->db->where('id_transaksi',$id)->update('transaksi',array(
            'status' => 0
        ));

        redirect(base_url('index.php/admin/data_transaksi'));
    }

    public function login_home()
    {
        if ($this->input->post('submit')) 
            # code..
        
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if($this->form_validation->run()==TRUE){
                if($this->admin_model->cek_user() == TRUE){
                    redirect(base_url('index.php/admin/homey'));
                }else{
                    $data['notif'] = "Username dan password salah";
                    $this->load->view('login', $data);
            }
                }else{
            $data['notif'] = validation_errors();
            $this->load->view('login_user', $data);

    }
    }

	
	public function home()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'acara/acara_list';
			$data['acara'] = $this->acara_model->get_data_acara();
            $data['notif'] = $this->komentar_model->get_data_notif();
			$data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;
            $this->notifikasi = $this->admin_model->cek_notif();
            $this->notifikasiCount = $this->admin_model->cek_jumlah_notif();
			$this->load->view('template', $data);
		}else{
			$this->load->view('login');
		}
	}

	 public function form_acara(){
        if ($this->session->userdata('logged_in') == TRUE ){
            $data['main_view'] = 'acara/acara_form';
            $data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;
            $this->notifikasi = $this->admin_model->cek_notif();
        	$this->notifikasiCount = $this->admin_model->cek_jumlah_notif();
            $this->load->view('template', $data);
        }else{
            redirect('login');
        }

    }

    public function form_komentar(){
    		if ($this->session->userdata('logged_in') == TRUE ){
            $data['main_view'] = 'komentar/komentar_form';

			$data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;

            $this->load->view('home/index', $data);
        }else{
            redirect('login');
        }	
    }

     public function form_admin(){
    		if ($this->session->userdata('logged_in') == TRUE ){
            $data['main_view'] = 'admin/admin_form';
            $data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;
            $this->notifikasi = $this->admin_model->cek_notif();
        	$this->notifikasiCount = $this->admin_model->cek_jumlah_notif();
            $this->load->view('template', $data);
        }else{
            redirect('login');
        }
    }

	public function data_acara() {
        if ($this->session->userdata('logged_in') == TRUE) {
        	$data['main_view'] = 'acara/acara_list';
			$data['acara'] = $this->acara_model->get_data_acara();
			$data['notif'] = $this->komentar_model->get_data_notif();
			$this->komentar_model->setDibaca();
			$data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;
			$this->load->view('template', $data);
		}else{
			$this->load->view('login');
		}
    }

    public function data_admin() {
        if ($this->session->userdata('logged_in') == TRUE) {
        	$data['main_view'] = 'admin/admin_list';
			$data['admin'] = $this->admin_model->get_data_admin();
			$data['notif'] = $this->komentar_model->get_data_notif();
			$this->komentar_model->setDibaca();
			$data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;
			$this->load->view('template', $data);
		}else{
			$this->load->view('login');
		}
    }


    public function data_email() {
        if ($this->session->userdata('logged_in') == TRUE) {
        	$data['main_view'] = 'email/email_list';
			$data['email'] = $this->email_model->get_data_email();
			$data['notif'] = $this->komentar_model->get_data_notif();
			$this->komentar_model->setDibaca();
			$data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;
			$this->load->view('template', $data);
		}else{
			$this->load->view('login');
		}
    }

     public function data_rating() {
        if ($this->session->userdata('logged_in') == TRUE) {
            $data['main_view'] = 'rating/rating_list';
            $data['rating'] = $this->rating_model->get_data_rating();
            $data['notif'] = $this->komentar_model->get_data_notif();
            $this->komentar_model->setDibaca();
            $data['notifikasi'] = $this->notifikasi;
            $data['notifikasi_count'] = $this->notifikasiCount;
            $this->load->view('template', $data);
        }else{
            $this->load->view('login');
        }
    }

    public function data_transaksi() {
        if ($this->session->userdata('logged_in') == TRUE) {
            $data['main_view'] = 'transaksi/transaksi_list';
            $data['transaksi'] = $this->transaksi_model->get_data_transaksi();
            $data['notif'] = $this->komentar_model->get_data_notif();
            $this->komentar_model->setDibaca();
            $data['notifikasi'] = $this->notifikasi;
            $data['notifikasi_count'] = $this->notifikasiCount;
            $this->load->view('template', $data);
        }else{
            $this->load->view('login');
        }
    }

    public function data_komentar() {
        if ($this->session->userdata('logged_in') == TRUE) {
        	$data['main_view'] = 'komentar/komentar_list';
			$data['komentar'] = $this->komentar_model->get_data_komentar();
			$data['notif'] = $this->komentar_model->get_data_notif();
			$this->komentar_model->setDibaca();
			$data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;
			$this->load->view('template', $data);
		}else{
			$this->load->view('login');
		}
 
    }

	public function logout()
	{
		$data = array(
			'username' => '',
			'logged_in' => FALSE
			);
		$this->session->sess_destroy();
		redirect('admin/login');
	}

    public function logout_home()
    {
        $data = array(
            'username' => '',
            'logged_in' => FALSE
            );
        $this->session->sess_destroy();
        redirect('admin/login_home');
    }


}
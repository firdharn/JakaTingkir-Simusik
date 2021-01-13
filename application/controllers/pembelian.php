<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pembelian_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
	        $data['pembelian'] = $this->pembelian_model->get_data_pembelian_by_id($this->session->userdata('user_id'));
			$this->load->view('pembelian', $data);	
		}else{
			redirect('admin/login_home');
		}
	}

	public function tiket($id){
			$data['pembelian'] = $this->pembelian_model->get_data_pembelian_by_transaksi_id($id);
			$this->load->view('pembelianprint', $data);	

	}

}

/* End of file pembelian.php */
/* Location: ./application/controllers/pembelian.php */
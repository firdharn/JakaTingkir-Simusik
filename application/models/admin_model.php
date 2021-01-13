<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public $table = 'users';
    public $id = 'id';
    public $order = 'ASC';


		public function __construct()
	{
		parent::__construct();
	}

	   function get_data_admin()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

	public function cek_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->get('users');

		if ($query->num_rows() > 0) {
			$data = array(
				'username' => $username,
				'logged_in' => TRUE,
                'user_id' => $query->result()[0]->id
				);
			$this->session->set_userdata($data);
			# code...
		return TRUE;
		}else {
			return FALSE;
		}
	}

	public function cek_notif()
	{

		$data = $this->db->query("SELECT * FROM `notifikasi` ORDER BY waktu desc")->result();

		return $data;
	}

	public function cek_jumlah_notif(){
				$jumlah = $this->db->query('SELECT COUNT(id) as Jumlah FROM notifikasi where is_read = 0 ')->result()[0]->Jumlah;
		return $jumlah;
	}

	   public function insert($gambar) 
    {
            $data = array(
            'id' => $this->input->post('id_acara'),
            'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'gambar' => $gambar['file_name']

            );

            $this->db->insert('users', $data);
    //cek keberhasilan insert data
    if ($this->db->affected_rows() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  function get_detil($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

   function update($id)
    {
        /*$this->db->where($this->id, $id);
        $this->db->update($this->table, $data);*/
         $data = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),

        );

        $this->db->where('id', $id)
                 ->update('users', $data);

        if ($this->db->affected_rows() > 0) 
        {
        return TRUE;
        }else{
        return FALSE;
        }
    }

  public function delete($id) {
    return $this->db->delete('users', array('id'=>$id));
  }

	
}

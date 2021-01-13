<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email_model extends CI_Model
{

    public $table = 'subscriber';
    public $id = 'id_email';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_data_email()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_data_notif()
    {
        return $this->db->where('is_read', 0)
                        ->get('notifikasi')
                        ->result();
    }
    // get data by id
    function get_detil($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

     public function insert() 
    {
            $data = array(
            'email' => $this->input->post('email'),
            );
            $this->db->insert('subscriber', $data);

    //cek keberhasilan insert data
    if ($this->db->affected_rows() > 0) {

      $dataNotif = array(
            'target_user' => 1,
            'target_link' => 'http://localhost/konser/index.php/admin/data_email',
            'title' => $this->input->post('email') . ' Mengikuti Anda ',
            'subtitle' => 'Klik notifikasi untuk informasi lebih lanjut',
            'is_read' => 0 // 0 : Belum Dibaca, 1 Sudah Dibaca
            
        );
        $this->db->insert('notifikasi',$dataNotif);
      return TRUE;
    } else {
      return FALSE;
    }
  }

   function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

      public function delete($id) {
    return $this->db->delete('subscriber', array('id_email'=>$id));
  }

  function setDibaca(){
    $dataNotif = array(
            'is_read' => 1 // 0 : Belum Dibaca, 1 Sudah Dibaca
        );
    $this->db->update('notifikasi', $dataNotif);
  }
}
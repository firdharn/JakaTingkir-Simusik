<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Komentar_model extends CI_Model
{

    public $table = 'komentar';
    public $id = 'id_komentar';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_data_komentar()
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
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'komentar' => $this->input->post('komentar'),
       
            );
            $this->db->insert('komentar', $data);

    //cek keberhasilan insert data
    if ($this->db->affected_rows() > 0) {

      $dataNotif = array(
            'target_user' => 1,
            'target_link' => 'http://localhost/konser/index.php/admin/data_komentar',
            'title' => $this->input->post('nama') . ' Memberikan Saran ',
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
    return $this->db->delete('komentar', array('id_komentar'=>$id));
  }

  function setDibaca(){
    $dataNotif = array(
            'is_read' => 1 // 0 : Belum Dibaca, 1 Sudah Dibaca
        );
    $this->db->update('notifikasi', $dataNotif);
  }

  function saveRateComment(){
    $idAcara = $this->input->post('idAcara');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $komen = $this->input->post('komentar');

    $data = array(
        'id_acara' => $idAcara,
        'email' => $email,
        'nama' => $nama,
        'komentar' => $komen );

    $this->db->insert('rating', $data);
    if ($this->db->affected_rows() > 0) {

      $dataNotif = array(
            'target_user' => 1,
            'target_link' => 'http://localhost/konser/index.php/admin/data_rating',
            'title' => $this->input->post('nama') . ' Memberikan Komentar ',
            'subtitle' => 'Klik notifikasi untuk informasi lebih lanjut',
            'is_read' => 0 // 0 : Belum Dibaca, 1 Sudah Dibaca
            
        );
        $this->db->insert('notifikasi',$dataNotif);
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
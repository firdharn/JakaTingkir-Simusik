<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

    public $table = 'transaksi';
    public $id = 'id_transaksi';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    public function get_data_transaksi()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->join('harga','harga.id_harga=transaksi.id_harga')
                        ->join('acara','acara.id_acara=transaksi.id_acara')
                        ->get($this->table)
                        ->result();
    }

    public function fetch($id){
        $this->db->select('*')->where('id_rating',$id);

        $query = $this->db->get('rating');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


     function get_detil($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }


    public function delete($id) {
    return $this->db->delete('transaksi', array('id_transaksi'=>$id));
  }
    



    public function insert(){
        $data = array(
            //nama kolom    //nama form input
            'id_acara' => $this->input->post('id_acara'),
            'nama' => $this->input->post('nama'),
            'jumlah'      => $this->input->post('jumlah'),
            'mode_pembayaran'      => $this->input->post('mode_pembayaran'),
            'total' => $this->input->post('harga')*$this->input->post('jumlah'),
            'id_harga' => $this->input->post('id_harga'),
            'id_user' => $this->session->userdata('user_id')
        );

        //proses input data
        $this->db->insert('transaksi', $data);

        //cek apakah berhasil
/*        if($this->db->affected_rows() > 0){
            return array(
                'total' => $this->input->post('harga')*$this->input->post('jumlah'),
                'status' => TRUE);
        }else{
            return array(
                'status' => FALSE);
        }*/

         if ($this->db->affected_rows() > 0) {

            $dataNotif = array(
            'target_user' => 1,
            'target_link' => 'http://localhost/konser/index.php/admin/data_transaksi',
            'title' => $this->input->post('nama') . ' Memesan Tiket ',
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
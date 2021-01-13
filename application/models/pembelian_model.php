<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_model extends CI_Model {
	public $table = 'transaksi';
    public $id = 'id_transaksi';
    public $order = 'ASC';


		public function __construct()
	{
		parent::__construct();
	}

	   function get_data_pembelian()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->join('harga','harga.id_harga = transaksi.id_harga')
                        ->join('harga','harga.id_harga = transaksi.harga')
        				->get($this->table)
        				->result();
    }

    function get_data_pembelian_by_id($id){
    	$v = $this->db->query('
    		SELECT * FROM transaksi JOIN acara ON transaksi.id_acara = acara.id_acara WHERE transaksi.id_user = ?
    	',array($id));

    	// return $this->db->where('transaksi.id_user', $id)
    	// 				->join('transaksi', 'transaksi.id_acara = acara.id_acara', 'left')
    	// 				->get('acara')
    	// 				->result();


    	return $v->result();
    }

        function get_data_pembelian_by_transaksi_id($id){
    	$v = $this->db->query('
    		SELECT * FROM transaksi JOIN acara ON transaksi.id_acara = acara.id_acara WHERE transaksi.id_transaksi = ?
    	',array($id));

    	return $v->result()[0];
    }


}

/* End of file pembelian_model.php */
/* Location: ./application/models/pembelian_model.php */
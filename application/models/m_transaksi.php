<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_transaksi extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function save_transaksi($data){
        $this->db->insert('transaksi', $data);
    }

    public function save_item($item){
        $this->db->insert('sewa', $item);
    }

    public function get_all(){
        $q = $this->db->query('select * from transaksi');
        return $q->result_array();
    }

    public function update_sudahbayar($id){
        $this->db->where('no_transaksi', $id);
        $this->db->update('transaksi', array("status" => "Sudah Bayar"));
    }

    // public function update_sudahkirim($no_penjualan){
    //     $this->db->where('no_penjualan', $no_penjualan);
    //     $this->db->update('penjualan', array("status" => "sdh_kirim"));
    // }

}
?>
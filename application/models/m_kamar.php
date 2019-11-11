<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_kamar extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $q = $this->db->query('select * from kamar');
        return $q->result_array();
    }

    public function get_by_id($id){
        $q = $this->db->query('select * from kamar where id_tipe='.$id);
        return $q->result_array()[0];
    }

    public function update_tersedia($id, $data){
        $this->db->where('id_tipe', $id);
        $this->db->update('kamar', $data);
    }

    // public function save($data){
    //     $this->db->insert('mahasiswa', $data);
    // }

    // public function search_by_name($name){
    //     $q = $this->db->query('select * from mahasiswa inner join prodi on mahasiswa.kd_prodi = prodi.kd_prodi where nama like "%'.$name.'%"');
    //     return $q->result_array();
    // }
}
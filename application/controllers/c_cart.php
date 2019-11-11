<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_cart extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_kamar');
    }

    public function display(){
        $data['content_div'] = $this->load->view('v_cart_display', '', TRUE);;
        $this->load->view('v_template', $data);
    }

    public function add($id){
        echo "adding ".$id;

        $data = $this->m_kamar->get_by_id($id);

        if(!isset($_SESSION['cart'][$id])){
            echo "kosong";
            $_SESSION['cart'][$id] = array(
                        "id"            => $id,
                        "nama_kamar"    => $data['nama_tipe'],
                        "jumlah"        => 1,
                        "harga"         => $data['harga_perbulan']
                    );
        }
        else{
            $qty = $_SESSION['cart'][$id]['jumlah'];
            $_SESSION['cart'][$id]['jumlah'] = $qty + 1;
        }
        
        redirect(base_url().'index.php/c_cart/display');
    }

    public function increase_jumlah($id){
        $data = $this->m_kamar->get_by_id($id);
        $qty = $_SESSION['cart'][$id]['jumlah'];
        if($qty == $data['unit_tersedia']){ ?>
            <script>
                alert('Sudah Mencapai Stok Maksimum yang tersedia!');
                window.history.go(-1);
            </script>
        <?php }
        else {
            $_SESSION['cart'][$id]['jumlah'] = $qty + 1;
            redirect(base_url().'index.php/c_cart/display');
        }
    }

    public function decrease_jumlah($id){
        $qty = $_SESSION['cart'][$id]['jumlah'];
        if($qty == 1){ ?>
            <script>
                alert('Sudah Mencapai Stok Minimum yang Dapat Dibeli!');
                window.history.go(-1);
            </script>
        <?php }
        else {
            $_SESSION['cart'][$id]['jumlah'] = $qty - 1;
            redirect(base_url().'index.php/c_cart/display');
        }
    }
    
    public function clear_all(){
        unset($_SESSION['cart']);
        redirect(base_url().'index.php/c_cart/display');
    }

    public function clear_by_id($id){
        unset($_SESSION['cart'][$id]);
        redirect(base_url().'index.php/c_cart/display');
    }

}
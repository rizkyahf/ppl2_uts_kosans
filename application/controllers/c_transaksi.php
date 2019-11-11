<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_transaksi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_transaksi');
		$this->load->model('m_kamar');
	}

	public function add_data_pembeli(){
		$ableToNext = true;
		foreach($this->session->cart as $res){
			$temp = $this->m_kamar->get_by_id($res['id']);
			if($res['jumlah'] > $temp['unit_tersedia']){ ?>
				<script>
					alert('Stok dari <?=$res['nama_tipe'];?> Tinggal Tersisa <?=$temp['unit_tersedia'];?>!');
					window.history.go(-1);
				</script>
			<?php 
				$ableToNext = false;
			}
		}

		if($ableToNext){
			// $data1['dropdown_provinsi'] = $this->load->view('v_ajax_dropdown_provinsi', '', TRUE);
			$data['content_div'] = $this->load->view('v_transaksi_form_pembeli', "", TRUE);
			$this->load->view('v_template', $data);
		}
	}

	public function proses_transaksi(){
		echo "<pre>"; var_dump($this->session->cart); echo "</pre>";   
		echo "<pre>"; var_dump($this->input->post()); echo "</pre>"; 
		
		$total = 0;

		foreach($this->session->cart as $res){
			$total = $total + ($res['harga'] * $res['jumlah']);

			$temp = $this->m_kamar->get_by_id($res['id']);
			$stok['unit_tersedia']	= $temp['unit_tersedia']-$res['jumlah'];

			$this->m_kamar->update_tersedia($res['id'], $stok);
		}

		$data['no_transaksi']       = $this->input->post('kode_transaksi'); 
		$data['tanggal']            = date('Y-m-d H:i:s');
		$data['total_bayar']        = $total;
		$data['nama']          		= $this->input->post('nama_penyewa'); 
		$data['no_hp']              = $this->input->post('no_hp'); 
        $data['alamat']             = $this->input->post('alamat'); 
        $data['status']             = "Belum Bayar";
		
		$this->m_transaksi->save_transaksi($data);
		
		foreach($this->session->cart as $res){
			$item['no_transaksi']	= $this->input->post('kode_transaksi');
			$item['id_kamar']		= $res['id'];
			$item['jumlah']			= $res['jumlah'];
			$item['harga']		    = $res['harga'];

			$this->m_transaksi->save_item($item);
		}

        unset($_SESSION['cart']);
        redirect(base_url().'index.php/c_cart/display');
	}

	public function display(){
        if($this->session->userdata('username') == null){
            redirect(site_url('c_account/login'));
        }

        $data1['transaksi'] = $this->m_transaksi->get_all();
        $data['content_div'] = $this->load->view('v_transaksi_display_admin', $data1, TRUE);
        $this->load->view('v_template', $data);
	}

	public function update_sudahbayar($id){
		$this->m_transaksi->update_sudahbayar($id);
		redirect(base_url().'index.php/c_transaksi/display');
	}
	
	// public function update_sudahkirim($id){
	// 	$this->m_transaksi->update_sudahkirim($id);
	// 	redirect(base_url().'index.php/c_transaksi/display');
	// }
}

?>
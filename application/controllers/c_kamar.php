<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_kamar extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_kamar');
    }

	public function index(){
		$this->load->view('welcome_message');
    }
    
    public function display(){
        $data1['kamar'] = $this->m_kamar->get_all();
        $data['content_div'] = $this->load->view('v_kamar_display', $data1, TRUE);
        $this->load->view('v_template', $data);
    }
}

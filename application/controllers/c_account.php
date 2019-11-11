<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_account extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_account');
    }

    public function login(){
        if($this->session->userdata('username') != null){
            redirect(site_url('c_kamar/display'));
        }
        $this->load->view('v_login');
    }

    public function do_login(){
        if($this->session->userdata('username') != null){
            redirect(site_url('c_transaksi/display'));
        }
        echo "a";
        var_dump($this->input->post());

        if($this->input->post('submit') != null){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            echo "B";

            $cek = $this->m_account->cek_login($username, $password);

            if($cek != NUll){
                $data_session['username'] = $username;
                $data_session['password'] = $password;
                echo "c";
                $this->session->set_userdata($data_session);
                redirect(site_url('c_transaksi/display'));
            }
            else{
                echo "d";
                redirect(site_url());
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
		redirect(site_url());
    }
}
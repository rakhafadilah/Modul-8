<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load Model, Session, dan Helper
        $this->load->model('M_jalur');
        $this->load->library('session');
        $this->load->helper('url');
    }

    // Fungsi ini yang akan pertama kali dipanggil untuk menampilkan form Login
    public function index() {
        // Jika sudah login, langsung ke dashboard
        if($this->session->userdata('status') == "login") {
            redirect('jalur');
        }
        // Memanggil file application/views/login.php
        $this->load->view('login'); 
    }

    // Fungsi untuk menampilkan form Registrasi
    public function registrasi() {
        // Memanggil file application/views/registrasi.php
        $this->load->view('registrasi');
    }

    // Fungsi untuk memproses data saat tombol Login ditekan
    public function login_aksi() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $cek = $this->M_jalur->cek_login($email, $password);

        if($cek->num_rows() > 0) {
            $data_session = array('status' => "login");
            $this->session->set_userdata($data_session);
            redirect('bikepath/dashboard');
        } else {
            echo "<script>alert('Email atau Password salah!'); window.location='".site_url('auth')."';</script>";
        }
    }

    // Fungsi untuk memproses data saat tombol Daftar ditekan
    public function register_aksi() {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );

        if($this->M_jalur->register($data)) {
            echo "<script>alert('Registrasi Berhasil! Silakan Login.'); window.location='".site_url('auth')."';</script>";
        } else {
            echo "<script>alert('Registrasi Gagal!'); window.location='".site_url('auth/registrasi')."';</script>";
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
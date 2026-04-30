<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bikepath extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Memuat model, library session untuk login, dan library upload untuk gambar
        $this->load->model('Bikepath_model');
        $this->load->library(['session', 'upload']);
        $this->load->helper(['url', 'form']);
    }

    // 1. HALAMAN LOGIN (Default Page)
    public function index() {
        // Jika sudah login, langsung lempar ke dashboard
        if($this->session->userdata('status') == "login") {
            redirect('dashboard');
        }
        $this->load->view('login');
    }

    // 2. PROSES LOGIN
    public function proses_login() {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $cek = $this->Bikepath_model->cek_login($email, $password);

    if ($cek->num_rows() > 0) {
        $data_user = $cek->row();

        $data_session = [
            'email' => $data_user->email,
            'status' => "login"
        ];

        $this->session->set_userdata($data_session);

        redirect('bikepath/dashboard');
    } else {
        echo "<script>alert('Email atau Password salah!'); window.location='".base_url()."';</script>";
    }
}

    // 3. HALAMAN DASHBOARD 
    public function dashboard() {
        // Proteksi halaman: jika belum login, balikkan ke halaman login
        if($this->session->userdata('status') != "login") {
            redirect('bikepath');
        }

        $data['jalur'] = $this->Bikepath_model->get_all_jalur();
        $this->load->view('dashboard', $data);
    }

    // 4. View data  
    public function view_data($id) {
    if($this->session->userdata('status') != "login") {
        redirect('bikepath');
    }

    $data['jalur'] = $this->Bikepath_model->get_jalur_by_id($id);
    $this->load->view('view_data', $data);
    }

    // 5. Input data
    public function input() {
    if($this->session->userdata('status') != "login") {
        redirect('bikepath');
    }

    $this->load->view('input');
    }

    
    public function simpan() {
        if($this->session->userdata('status') != "login") redirect('bikepath');

        $id = $this->input->post('id'); // Ambil ID jika ada (untuk update)
        
        // Konfigurasi Upload Gambar
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'bike_'.time();
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 2MB

        $this->upload->initialize($config);

        $data = [
            'nama_jalur' => $this->input->post('nama_jalur'),
            'lokasi'     => $this->input->post('lokasi'),
            'panjang'    => $this->input->post('panjang'),
            'deskripsi'  => $this->input->post('deskripsi')
        ];

        // Jika ada file yang diunggah
        if ($this->upload->do_upload('foto')) {
            $data['foto'] = $this->upload->data('file_name');
        }

        if ($id) {
            // Jika ID ada, lakukan Update
            $this->Bikepath_model->update_jalur($id, $data);
        } else {
            // Jika ID tidak ada, lakukan Insert
            $this->Bikepath_model->insert_jalur($data);
        }

        redirect('bikepath/dashboard');
    }

    // 6. Update data
    public function update_data($id) {
    if($this->session->userdata('status') != "login") {
        redirect('bikepath');
    }

    $data['jalur'] = $this->Bikepath_model->get_jalur_by_id($id);
    $this->load->view('update_data', $data);
}

    public function hapus($id) {
        if($this->session->userdata('status') != "login") redirect('bikepath');

        $this->Bikepath_model->delete_jalur($id);
        redirect('bikepath/dashboard');
    }

    // 7. PROSES HAPUS
    public function delete_data($id) {
    if($this->session->userdata('status') != "login") {
        redirect('bikepath');
    }

    $this->Bikepath_model->delete_jalur($id);
    redirect('bikepath/dashboard');
}

    // 6. PROSES LOGOUT
    public function logout() {
        $this->session->sess_destroy();
        redirect('bikepath');
    }
}
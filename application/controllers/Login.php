<?php
class Login extends CI_Controller {
    public function index() {
        $this->load->view('login'); // Memanggil file login.php Anda di folder views
    }

    public function aksi_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $where = array(
            'email' => $email,
            'password' => $password // Sesuai file Anda yang belum menggunakan hashing
        );

        $cek = $this->db->get_where('users', $where)->num_rows();

        if($cek > 0) {
            $data_session = array(
                'nama' => $email,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("jalur")); // Pindah ke dashboard jalur sepeda
        } else {
            echo "Email atau password salah!";
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
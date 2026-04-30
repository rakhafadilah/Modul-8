<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jalur extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_jalur');
        if($this->session->userdata('status') != "login") {
            redirect('auth');
        }
    }

    public function index() {
        $data['jalur'] = $this->M_jalur->get_all_jalur();
        $this->load->view('v_dashboard', $data);
    }

    public function input() {
        $this->load->view('v_input');
    }

    public function simpan() {
        $data = array(
            'nama_jalur' => $this->input->post('nama_jalur'),
            'lokasi' => $this->input->post('lokasi'),
            'panjang' => $this->input->post('panjang'),
            'deskripsi' => $this->input->post('deskripsi')
        );

        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name']     = time() . '_' . $_FILES['foto']['name'];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data['foto'] = $this->upload->data('file_name');
        }

        $this->M_jalur->insert_jalur($data);
        redirect('jalur');
    }

    public function hapus($id) {
        $this->M_jalur->delete_jalur($id);
        redirect('jalur');
    }
}
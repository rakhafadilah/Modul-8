<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jalur extends CI_Model {

    // --- FUNGSI UNTUK USER (AUTH) ---
    public function cek_login($email, $password) {
        return $this->db->get_where('users', ['email' => $email, 'password' => $password]);
    }

    public function register($data) {
        return $this->db->insert('users', $data);
    }

    // --- FUNGSI UNTUK JALUR SEPEDA ---
    public function get_all_jalur() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('jalur_sepeda')->result_array();
    }

    public function get_jalur_by_id($id) {
        return $this->db->get_where('jalur_sepeda', ['id' => $id])->row_array();
    }

    public function insert_jalur($data) {
        return $this->db->insert('jalur_sepeda', $data);
    }

    public function update_jalur($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('jalur_sepeda', $data);
    }

    public function delete_jalur($id) {
        $this->db->where('id', $id);
        return $this->db->delete('jalur_sepeda');
    }
}
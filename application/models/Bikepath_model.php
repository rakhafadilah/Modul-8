<?php
class Bikepath_model extends CI_Model {
    
    // Fungsi untuk User
    public function cek_login($email, $password) {
        return $this->db->get_where('users', ['email' => $email, 'password' => $password]);
    }

    public function register($data) {
        return $this->db->insert('users', $data);
    }

    // Fungsi untuk Jalur Sepeda
    public function get_all_jalur() {
        return $this->db->order_by('id', 'DESC')->get('jalur_sepeda')->result_array();
    }

    public function insert_jalur($data) {
        return $this->db->insert('jalur_sepeda', $data);
    }

    public function update_jalur($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('jalur_sepeda', $data);
    }

    public function get_jalur_by_id($id) {
    return $this->db->get_where('jalur_sepeda', ['id' => $id])->row_array();
}

    public function delete_jalur($id) {
    $this->db->where('id', $id);
    $this->db->delete('jalur_sepeda'); // sesuaikan nama tabel!
}
}
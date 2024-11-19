<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Tambah user baru ke database
     * @param array $data Data user (username, email, password, full_name)
     * @return bool True jika berhasil, False jika gagal
     */
    public function register($data)
    {
        return $this->db->insert('users', $data);
    }

    /**
     * Verifikasi login pengguna
     * @param string $username Username pengguna
     * @param string $password Password pengguna
     * @return array|bool Data user jika berhasil, False jika gagal
     */
    public function login($username, $password)
    {
        // Cari user berdasarkan username
        $this->db->where('username', $username);
        $query = $this->db->get('users');

        if ($query->num_rows() === 1) {
            $user = $query->row_array();

            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                unset($user['password']); // Hapus password dari hasil
                return $user; // Return data user
            }
        }

        return false; // Login gagal
    }
}

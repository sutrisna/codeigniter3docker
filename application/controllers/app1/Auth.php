<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('app1/user');
    }

    /**
     * Halaman login
     */
    public function login()
    {
        // Jika form login dikirim
        if ($this->input->post()) {
            // Validasi input
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === TRUE) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                // Login user melalui model
                $user = $this->user->login($username, $password);

                if ($user) {
                    // Simpan data user ke session
                    $this->session->set_userdata('user', $user);

                    // Redirect ke dashboard
                    redirect('dashboard');
                } else {
                    // Pesan error jika login gagal
                    $data['error'] = 'Username atau password salah.';
                }
            } else {
                // Pesan error jika validasi gagal
                $data['error'] = validation_errors();
            }
        }

        // Load view login
        $this->load->view('app1/login', isset($data) ? $data : NULL);
    }

    public function register()
    {
        // Set aturan validasi form
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('password_check', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE) {
            // Jika validasi gagal, kembali ke halaman register
            $this->load->view('app1/register');
        } else {
            // Ambil data form yang valid
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $fullname = $first_name . ' ' . $last_name;
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $role = $this->input->post('role');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

            // Buat data array untuk disimpan di database
            $data = array(
                'full_name' => $fullname,
                'username' => $username,
                'email' => $email,
                'role' => $role,
                'password' => $password
            );

            // Panggil model untuk insert data
            $inserted = $this->user->register($data);

            if ($inserted) {
                // Redirect atau beri pesan sukses
                $this->session->set_flashdata('success', 'Registration successful!');
                redirect('login');
            } else {
                // Jika gagal, dapatkan pesan error dari MySQL
                $db_error = $this->db->error();
                $error_message = isset($db_error['message']) ? $db_error['message'] : 'Registration failed due to unknown error!';
                
                // Tampilkan pesan error ke halaman
                $this->session->set_flashdata('error', $error_message);
                redirect('register');
            }
        }
    }

    /**
     * Logout user
     */
    public function logout()
    {
        // Hapus session user
        $this->session->unset_userdata('user');
        redirect('login');
    }
}

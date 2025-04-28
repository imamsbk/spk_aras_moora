<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Login_auth_db');
    }

    public function index() {
        $data['base_url'] = base_url();
        $this->load->view('login', $data);
    }

    public function login_auth() {
        $data = array(); // Gunakan array, bukan stdClass

        // Set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal
            $data['base_url'] = base_url();
            $this->load->view('login', $data);
        } else {
            // Validasi berhasil, ambil input
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->Login_auth_db->login($username, $password)) {
                // Login berhasil
                $user_data = $this->Login_auth_db->get_user_data($username);

                $this->session->set_userdata(array(
                    'user_data_session' => array(
                        'name' => $user_data['name'],
                        'username' => $user_data['username'],
                        'level' => $user_data['level']
                    ),
                    'logged_in' => true,
                    'id_user' => $user_data['id_user']
                ));

                redirect('Home', 'refresh');
            } else {
                // Login gagal
                $data['error'] = 'Username dan password tidak terdaftar.';
                $data['base_url'] = base_url();
                $this->load->view('login', $data);
            }
			
        }
    }
}
?>

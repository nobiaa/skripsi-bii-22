<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == false) {
            $data['title'] = "Login Page";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi berhasil
            $this->_login();
        }
    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //usernya ada
        if ($user) {

            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else if ($user['role_id'] == 2) {
                        redirect('guru');
                    } else if ($user['role_id'] == 3) {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('no_induk', 'No_induk', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont much!',
            'min_length' => 'Password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = "Registration";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'no_induk' => htmlspecialchars($this->input->post('no_induk', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'role_id' => htmlspecialchars($this->input->post('role_id', true)),
                'is_active' => 1,
                'data_created' => time()

            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
}

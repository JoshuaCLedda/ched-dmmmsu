<?php
class Login extends CI_Controller
{
    public function index()
    {
        // if ($this->session->userdata('logged_in')) {
        //     redirect($_SERVER['HTTP_REFERER']);
        // }
        $this->load->view('partials/header');
        $this->load->view('partials/footer');
        $this->load->view('auth/login');
    }

    // Login
    public function authenticate()
    {
        $result = $this->User->loginUser();

        if ($result['success']) {
            $user = $result['user'];

            $user_data = array(
                'id' => $user['id'],
                'role' => $user['role'],
                'logged_in' => true
            );

            $this->session->set_userdata($user_data);

            if ($user['role'] == 0) {
                redirect('user/dashboard');
            } elseif ($user['role'] == 1) {
                redirect('dashboard'); 
            }
        } else {
            $data['error_message'] = $result['error'];
            $this->load->view('partials/header');
            $this->load->view('auth/login', $data);
            $this->load->view('partials/footer');
        }
    }

    // Register
    public function logout()
    {
        // Destroy session and redirect to login
        $this->session->sess_destroy();
        redirect('login');
    }
}

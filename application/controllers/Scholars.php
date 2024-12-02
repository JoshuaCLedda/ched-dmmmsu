<?php
class Scholars extends CI_Controller
{
    public function index()
    {

        $this->load->view('partials/header');
        $this->load->view('partials/sidebar');
        $this->load->view('partials/navbar');
        $this->load->view('admin/dashboard');
        $this->load->view('partials/footer');
    }
    
    
    private function redirectIfUnauthorized()
    {
        if (!$this->session->userdata('logged_in')) {
            $previous_url = $_SERVER['HTTP_REFERER'] ?? 'login';
            redirect($previous_url);
        }
    }

    private function prepareUserData()
    {
        $user_id = $this->session->userdata('id');
        $user_data = $this->User->getUserById($user_id);
        $is_logged_in = $this->session->userdata('logged_in');
        $user_role = $this->session->userdata('role');

        $this->data['user_data'] = $user_data;
        $this->data['is_logged_in'] = $is_logged_in;
        $this->data['role'] = $user_role;
    }



}

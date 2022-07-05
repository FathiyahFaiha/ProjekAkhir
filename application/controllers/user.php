<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		$this->load->model('user_model', 'user');

        $list_user = $this->user->getAll();

        $data["list_user"] = $list_user;

        $this->load->view('layout/header');
        $this->load->view('user/index', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/sidebar');

	}
    
    function login(){
        $this->load->view('user/login');
    }

    function register(){
        $this->load->view('user/register');
    }

    function proses_register(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim\required');
        $this->form_validation->set_rules('confirm_password', 'confirm_password', 'trim\required');

        $this->form_validation->set_massage('required', '{field} Harus diisi');

        $this->form_validation->set_error_delimeters('<div class"alert alert-danger">, </div>');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'status_user' => 1,
                'level_user' => 1,
            );

            var_dump($data);
            // $this->user_model->insert($data);
            // $this->session->set_flashdata('message', '<div class"alert alert-info">Data Berhasil Disimpan, </div>');
            // redirect('user/login','refresh');

        }else {
            $this->load->view('user/register');
        }
    }
}

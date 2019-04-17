<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        $this->load->view('connection');
    }

    public function signin()
    {
        $this->load->view('signin');
    }

    public function data()
    {
        if ($this->session->userdata('currently_logged_in'))
        {
            $this->load->view('data');
        } else {
            redirect('Main/invalid');
        }
    }

    public function invalid()
    {
        $this->load->view('invalid');
    }

    public function login_action()
    {
        $this->load->helper('security');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username:', 'required|trim|xss_clean|callback_validation');
        $this->form_validation->set_rules('password', 'Password:', 'required|trim');

        if ($this->form_validation->run())
        {
            $data = array(
                'username' => $this->input->post('username'),
                'currently_logged_in' => 1
                );
                    $this->session->set_userdata($data);
                redirect('Main/data');
        }
        else {
            $this->load->view('connection');
        }
    }

    public function signin_validation()
    {
         $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'trim|is_unique[signup.name]');

        $this->form_validation->set_rules('email', 'Email', 'trim|is_unique[signup.email]');

        $this->form_validation->set_rules('username', 'Username', 'trim|xss_clean|is_unique[signup.username]');

        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');

        $this->form_validation->set_message('is_unique', 'username already exists');

        $this->form_validation->set_message('is_unique', 'email already exists');

        // $this->cache->clean();

        $data = array(
            'name'     => $this->input->post('name'),
            'email'  => $this->input->post('email'),
            'username'   => $this->input->post('username'),
            'password' => $this->input->post('password')
            );
//insert data into database table.
        $this->db->insert('signup',$data);

// redirect("baby_form/index");

    if ($this->form_validation->run())

        {
            // $this->for_validation->save();
            echo "Welcome, you are logged in.";
            // redirect("baby_form/index");
         }
            else {

            $this->load->view('Welcome/connection');
        }
    }

    public function validation()
    {
        $this->load->model('login_model');

        if ($this->login_model->log_in_correctly())
        {

            return true;
        } else {
            $this->form_validation->set_message('validation', 'Incorrect username/password.');
            return false;
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Welcome/connection');
    }

}
?>

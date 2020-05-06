<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home/index.php');
    }
    public function login()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules(array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim'
            ), array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim'
            )
        ));
        if (!$this->form_validation->run()) {
            $this->load->view('home/login.php');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $user = $this->Peserta->getPeserta();
        if (!$user) {
            $this->session->set_flashdata('message', 'Email belum terdaftar.');
            redirect(base_url('Home/login'));
            // echo "email belum terdaftar";
        } else {
            if (password_verify($this->input->post('password'), $user['password'])) {
                 $data = [
                    'id_peserta' => $user['id_peserta'],
                    'email' => $user['email'],
                    'nama' => ucwords($user['nama']),
                ];
                $this->session->set_userdata($data);
                redirect(base_url('User'));   
            } else {
                $this->session->set_flashdata('message', 'Password yang anda masukan salah.');
                redirect(base_url('Home/login'));
                
            }
        }
    }

    public function register()
    {
        $this->form_validation->set_rules($this->Peserta->rules);
        
        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view('home/register');
            // var_dump($this->Peserta->rules); die;
        } else {
            $this->Peserta->register();
            $this->session->set_flashdata('SuccessReg', 'success');
            redirect(base_url('/home/register'));
            // harusnya redirect ke dashboard
            // redirect(base_url('/home/login'));
        }
    }

    public function artikel()
    {
        $this->load->view('home/artikel.php');
    }

    public function skdonor()
    {
        $this->load->view('home/syarat_donor.php');
    }
}

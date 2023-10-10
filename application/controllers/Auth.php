<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
      public function index()
      {

            $this->load->view('admin/login2');
      }
      public function login()
      {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $this->db->from('user');
            $this->db->where('username', $username);
            $data = $this->db->get()->row();
            if ($data == NULL) {
                  $this->session->set_flashdata('alert', '
                  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <i class="fa fa-exclamation-circle me-2"></i>Username tidak ada!!!!!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  ');
                  redirect('auth');
            } else if($password==$data->password) {
                  $userdata = array(
                        'id_login' => true,
                        'id_user' => $data->id_user,
                        'password' => $data->password,
                        'username' => $data->username,
                        'level' => $data->level,
                        'nama' => $data->nama,
                  );
                  $this->session->set_userdata($userdata);
                  $this->session->set_flashdata('alert', '
                  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <i class="fa fa-exclamation-circle me-2"></i>selamat anda berhasil login
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  ');
                  redirect('admin/dashboard');
            } else { 
                  $this->session->set_flashdata('alert', '
                  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <i class="fa fa-exclamation-circle me-2"></i>Password Salah!!!!!!!!!!1
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  ');
                  redirect('auth');
            }
      }
      public function logout()
      {
            $this->session->sess_destroy();
            redirect('home');
      }
}

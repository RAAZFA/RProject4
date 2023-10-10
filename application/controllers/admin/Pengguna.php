<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            if($this->session->userdata('level')<>'admin'){
                  redirect('auth');
            }
      }
      public function index()
      {
           
            $this->db->select('*')->from('user');
            $this->db->order_by('username', 'ASC');
            $user = $this->db->get()->result_array();
            $data = array(
                  'judul_halaman' => "Pengguna",
                  'user' => $user);
            $this->template->load('template', 'admin/pengguna/pengguna', $data);
      }
      public function pengguna()
      {
            $data = array(
                  'judul_halaman' => "Tambah Pengguna"
            );
            $this->template->load('template', 'admin/pengguna/tambah_pengguna', $data);
      }
      public function input()
      {
            $this->db->from('user');
            $this->db->where('username', $this->input->post('username'));
            $cek = $this->db->get()->result_array();
            if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Username Sudah ADA.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
                  redirect('admin/pengguna/pengguna');
            }
            $data = array(
                  'username' => $this->input->post('username'),
                  'password' => md5($this->input->post('password')),
                  'nama' => $this->input->post('nama'),
                  'level' => $this->input->post('level')
            );
            $this->db->insert('user', $data);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Berhasil Menambahkan user.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/pengguna/pengguna');
      }
      public function delete($id)
      {
            $where = array('id_user' => $id);
            $this->db->delete('user', $where);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Data Berhasil DIHAPUS.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/pengguna/pengguna');
      }
      public function edit($id)
      {
            $this->db->select('*')->from('user');
            $this->db->where('id_user', $id);
            $user = $this->db->get()->result_array();
            $data = array('user' => $user);
            $this->template->load('template', 'admin/pengguna/edit_pengguna', $data);
      }
      public function update()
      {
            $data = array(
                  'nama'  => $this->input->post('nama'),
                  'username'  => $this->input->post('username'),
                
            );
            $where = array('id_user' => $this->input->post('id_user'));
            $this->db->update('user', $data, $where);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Data Berhasil DIUPDATE
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/pengguna/pengguna');
      }
}

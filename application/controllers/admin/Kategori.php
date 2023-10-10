<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            if ($this->session->userdata('level') == NULL) {
                  redirect('auth');
            }
      }
      public function index()
      {

            $this->db->from('kategori');
            $this->db->order_by('nama_kategori', 'ASC');
            $kategori = $this->db->get()->result_array();
            $data = array(
                  'judul_halaman' => 'kategori Konten',
                  'kategori'    => $kategori
            );
            $this->template->load('template', 'admin/kategori/kategori', $data);
      }
      public function tambah_kategori()
      {
            $data = array(
                  'judul_halaman' => 'tambah Kategori'
            );
            $this->template->load('template', 'admin/kategori/tambah_kategori', $data);
      }
      public function tambah()
      {
            $this->db->from('kategori');
            $this->db->where('nama_kategori', $this->input->post('nama_kategori'));
            $cek = $this->db->get()->result_array();
            if ($cek <> NULL) {
                  $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Maaf Ada Kategori dengan nama sama
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
                  redirect('admin/kategori/tambah_kategori');
            }
            $data = array(


                  'nama_kategori' => $this->input->post('nama_kategori')

            );
            $this->db->insert('kategori', $data);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Berhasil Menambahkan kategori.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/kategori/index');
      }
      public function delete($id)
      {
            $where = array('id_kategori' => $id);
            $this->db->delete('kategori', $where);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Data Berhasil DIHAPUS.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/kategori/index');
      }
      public function edit_kategori($id)
      {
            $this->db->select('*')->from('kategori');
            $this->db->where('id_kategori', $id);
            $kategori = $this->db->get()->result_array();
            $data = array('kategori' => $kategori);
            $this->template->load('template', 'admin/kategori/edit_kategori', array_merge($data));
      }
      public function update()
      {
            $where = array(
                  'id_kategori' => $this->input->post('id_kategori')
            );
            $data = array(
                  'nama_kategori' => $this->input->post('nama_kategori') 
            );
            $this->db->update('kategori',$data,$where);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Data Berhasil DIUPDATE
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/kategori/index');
      }
}

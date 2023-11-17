<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->order_by('nama_kategori', 'ASC');
		$kategori = $this->db->get()->result_array();

		$this->db->from('caraousel');
            $caraousel = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' 	=> 'Dashboard',
			'kategori'    	=> $kategori,
			'konten'		=> $konten,
			'caraousel'    	=> $caraousel
		);
		$this->template->load('template', 'admin/admin', array_merge($data));
	}
	public function konfigurasi()
	{
		$data = array(
			'judul_halaman' => "Konfigurasi"
		);
		$this->template->load('template', 'admin/configure', array_merge($data));
	}
}

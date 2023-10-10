<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		
		$this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
            $this->db->order_by('tanggal', 'DESC');
            $konten = $this->db->get()->result_array();
		$data = array(
			'judul' => "Beranda | Raazfa",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'caraousel' => $caraousel,
			'konten'	=> $konten

		);
		$this->template->load('template_user', 'artikel', $data);

	}
}
?>
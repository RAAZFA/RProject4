<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level')==NULL){
                  redirect('auth');
            }
         
	}
	public function index()
	{
		$data = array(
			'judul_halaman'=>"Dashboard"
		);
		$this->template->load('template','admin/admin',array_merge($data));

	}
	public function konfigurasi()
	{
		$data = array(
			'judul_halaman'=>"Konfigurasi"
		);
		$this->template->load('template','admin/configure',array_merge($data));
	}
}

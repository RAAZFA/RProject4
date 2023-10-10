<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caraousel extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level')==NULL){
                  redirect('auth');
            }
         
	}
	public function index()
      {

            $this->db->from('caraousel');
            $caraousel = $this->db->get()->result_array();
            $data = array(
                  'judul_halaman' 	=> 'Caraousel',
                  'caraousel'    	=> $caraousel
			
            );
            $this->template->load('template', 'admin/caraousel', $data);
      }
      public function tambah()
      {	
		$namafoto = date('YmdHis').'.jpg';
		$config[ 'upload_path'] 	= 'assets_template/upload/carousel';
		$config['max_size'] 		= 8*1024*1024; //3 *1024 *1024; //3Mb; 0=unlimited
		$config['allowed_types']	= '*';
		$config['file_name']		= $namafoto;
		$this->load->library( 'upload', $config);
		if($_FILES['foto']['size'] >= 8*1024*1024) {
		$this->session->set_flashdata('alert','
		<div class="alert alert-danger alert-dismissible" role="alert">
		Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 8 MB. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		'); redirect('admin/caraousel');
		} elseif( $this->upload->do_upload('foto')){
		$error = array('error' => $this->upload->display_errors());
		}else{
		$data = array('upload_data'=> $this->upload->data());
		}
            $data = array(
                  'judul' => $this->input->post('judul'),
                  'foto' => $namafoto,
            );
            $this->db->insert('caraousel', $data);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Berhasil Menambahkan caraousel.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/caraousel');
      }
      public function delete($id)
      {
		$filename=FCPATH.'/assets_template/upload/carousel/'.$id;
			if(file_exists($filename)){
				unlink("./assets_template/upload/carousel/".$id);
                  }
            $where = array('foto' => $id);
            $this->db->delete('caraousel', $where);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Data Berhasil DIHAPUS.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/caraousel/index');
      }
}


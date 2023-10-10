<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conten extends CI_Controller
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
            $this->db->from('kategori');
            $this->db->order_by('nama_kategori', 'ASC');
            $kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
            $this->db->order_by('tanggal', 'DESC');
            $konten = $this->db->get()->result_array();
            $data = array(
                  'judul_halaman' 	=> 'Konten',
                  'kategori'    	=> $kategori,
			'konten'		=> $konten
            );
            $this->template->load('template', 'admin/conten/conten', $data);
      }
      public function tambah_conten()
      {
		$this->db->from('kategori');
            $this->db->order_by('nama_kategori', 'ASC');
            $kategori = $this->db->get()->result_array();
            $data = array(
			'kategori'		=> $kategori,
                  'judul_halaman' 	=> 'tambah Konten'
            );
            $this->template->load('template', 'admin/conten/tambah_conten', $data);
      }
      public function tambah()
      {	
		
		$namafoto = date('YmdHis').'.jpg';
		$config[ 'upload_path'] 	= 'assets_template/upload/conten';
		$config['max_size'] 		= 8*1024*1024; //3 *1024 *1024; //3Mb; 0=unlimited
		$config['allowed_types']	= '*';
		$config['file_name']		= $namafoto;
		$this->load->library( 'upload', $config);
		if($_FILES['foto']['size'] >= 8*1024*1024) {
		$this->session->set_flashdata('alert','
		<div class="alert alert-danger alert-dismissible" role="alert">
		Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 8 MB. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		'); redirect('admin/conten/tambah_conten');
		} elseif( $this->upload->do_upload('foto')){
		$error = array('error' => $this->upload->display_errors());
		}else{
		$data = array('upload_data'=> $this->upload->data());
		}
            $this->db->from('konten');
            $this->db->where('judul', $this->input->post('judul'));
            $cek = $this->db->get()->result_array();
            if ($cek <> NULL) {
                  $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Maaf Ada judul konten yang sama
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
                  redirect('admin/conten/tambah_conten');
            }
            $data = array(


                  'judul' => $this->input->post('judul'),
                  'id_kategori' => $this->input->post('id_kategori'),
                  'keterangan' => $this->input->post('keterangan'),
                  'foto' => $namafoto,
			'tanggal' => date('Y-m-d'),
			'username' => $this->session->userdata('username'),
			'slug' => str_replace(' ','-',$this->input->post('judul')),
			 

            );
            $this->db->insert('konten', $data);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Berhasil Menambahkan conten.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/conten/index');
      }
      public function delete($id)
      {
		$filename=FCPATH.'/assets_template/upload/conten/'.$id;
			if(file_exists($filename)){
				unlink("./assets_template/upload/conten/".$id);
                  }
            $where = array('foto' => $id);
            $this->db->delete('konten', $where);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Data Berhasil DIHAPUS.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/conten/index');
      }
      public function edit_conten($id)
      {
            $this->db->select('*')->from('kategori');
            $this->db->order_by('nama_kategori','ASC');
            $kategori = $this->db->get()->result_array();
            $this->db->select('*')->from('konten');
            $this->db->where('id_konten', $id);
            $konten = $this->db->get()->result_array();
            $data = array('konten' => $konten,'kategori' => $kategori,'judul_halaman' 	=> 'edit Konten');
            $this->template->load('template','admin/conten/edit_conten',$data);
      }
      public function update()
      {
            $namafoto = $this->input->post('foto');
		$config[ 'upload_path'] 	= 'assets_template/upload/conten';
		$config['max_size'] 		= 8*1024*1024; //3 *1024 *1024; //3Mb; 0=unlimited
		$config['allowed_types']	= '*';
		$config['file_name']		= $namafoto;
		$config['overwrite']		= true;
		$this->load->library( 'upload', $config);
		if($_FILES['foto']['size'] >= 8*1024*1024) {
		$this->session->set_flashdata('alert','
		<div class="alert alert-danger alert-dismissible" role="alert">
		Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 8 MB. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		'); redirect('admin/conten/edit_conten');
		} elseif( $this->upload->do_upload('foto')){
		$error = array('error' => $this->upload->display_errors());
		}else{
		$data = array('upload_data'=> $this->upload->data());
		}
            
            $data = array(


                  'judul' => $this->input->post('judul'),
                  'id_kategori' => $this->input->post('id_kategori'),
                  'keterangan' => $this->input->post('keterangan'),
			'slug' => str_replace(' ','-',$this->input->post('judul')),
			 

            );
            $where = array('foto' => $this->input->post('foto'));
            $this->db->update('konten',$data,$where);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-secondary alert-dismissible" role="alert">
            Berhasil mengupdate conten.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/conten/index');
      }
}


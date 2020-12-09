<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_siswa extends CI_Controller {

	public function index()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('');
		}else{
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['v_user']  	 = $this->db->get_where('tbl_user', "id_user='1'")->row();
			$data['judul_web'] = "Dashboard";

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/dashboard', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function pengumuman()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('');
		}else{
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['v_user']  	 = $this->db->get_where('tbl_user', "id_user='1'")->row();
			$data['judul_web'] = "Pengumuman";

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/pengumuman', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function biodata()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['v_user']  		  = $this->db->get_where('tbl_user', "id_user='1'")->row();
			$data['judul_web'] 		= "Biodata ".ucwords($data['user']->row()->nama_lengkap);

					$this->load->view('siswa/header', $data);
					$this->load->view('siswa/biodata', $data);
					$this->load->view('siswa/footer');
		}
	}

	public function biodataedit()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			$data['user']  			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['v_user']  		= $this->db->get_where('tbl_user', "id_user='1'")->row();
 			$data['judul_web'] 		= "Biodata ".ucwords($data['user']->row()->nama_lengkap);
			$this->db->order_by('id_pdd', 'ASC');
			$data['v_pdd'] = _cmbpendidikan();
			$data['v_jekel'] = _cmbjekel();
			$data['v_jur'] = _cmbjurusan();
			$data['v_ting'] = _cmbtinggal();
			$data['v_agama'] = _cmbagama();
			$data['v_darah'] = _cmbgoldarah();
			$data['v_status_keluarga'] = _cmbstatus_keluarga();
			$data['v_trans'] = _cmbtransportasi();
			$data['v_serag'] = _cmbseragam();
			$data['v_pekerjaan'] = _cmbpekerjaan();
			$data['v_penghasilan'] = _cmbpenghasilan();
			$data['v_status_sekolah'] = _cmbstatus_sekolah();
			$data['v_model_un'] = _cmbmodel_un();
			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/biodata_edit', $data);
			$this->load->view('siswa/footer');
		}
	}


	public function cetak() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['v_user']  		= $this->db->get_where('tbl_user', "id_user='1'")->row();
		$data['judul_web'] 	= "Cetak Bukti Pendaftaran ".ucwords($data['user']->nama_lengkap);

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));
		$data['v_materi']  		= $this->db->get_where('tbl_verifikasi', "id_verifikasi='1'")->row();


		$this->load->view('siswa/cetak', $data);
	}



	public function cetak_lulus() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}
		$this->db->like('tgl_siswa', date('Y'), 'after');
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['v_user']  		= $this->db->get_where('tbl_user', "id_user='1'")->row();
		$data['judul_web'] 	= "Cetak Bukti Lulus ".ucwords($data['user']->nama_lengkap);

		if ($data['user']->status_pendaftaran != 'lulus') {
			redirect('404');
		}

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));
		$data['v_ket'] 		= $this->db->get_where('tbl_pengumuman', "id_pengumuman='1'")->row();

		$this->load->view('siswa/cetak_lulus', $data);
	}

	public function logout() {
		if ($this->session->userdata('no_pendaftaran') != '') {
			$this->session->sess_destroy();
		}
		 redirect('');
	}

	public function uploadbukti() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			$data['user']			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['v_user']  		= $this->db->get_where('tbl_user', "id_user='1'")->row();
 			$data['judul_web'] 		= "Upload Bukti Biaya Pendaftaran ".ucwords($data['user']->row()->nama_lengkap);
			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/uploadbukti', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function doupdate()
	{
		$getData = $this->input->post();
		$ceks = $this->session->userdata('no_pendaftaran');
		$where = array('no_pendaftaran' => $ceks);
		$getData['tgl_lahir']= $getData['tgl_lahir'] ."-". $getData['bln_lahir'] ."-". $getData['thn_lahir'];
		unset ($getData['tgl_lahir'],  $getData['bln_lahir'],  $getData['thn_lahir']);
		$save = $this->M_master->getUpdate($getData,$where,"tbl_siswa");
		redirect('panel_siswa/biodata');
	}

	public function douploadbukti() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			if(!is_dir("bukti")) {
				mkdir("bukti" , 0777);
			}
			$files = $_FILES;
			$this->load->library('upload');

			$_FILES['fotos']['name']= $files['bukti']['name'];
			$_FILES['fotos']['type']= $files['bukti']['type'];
			$_FILES['fotos']['tmp_name']= $files['bukti']['tmp_name'];
			$_FILES['fotos']['error']= $files['bukti']['error'];
			$_FILES['fotos']['size']= $files['bukti']['size'];

            $config = array();
            $config['upload_path'] = 'bukti/';
            $config['allowed_types'] = '*';
            $config['overwrite']     = true;
            $config['encrypt_name'] = true;
			$configs['quality']= '50%';

            $this->upload->initialize($config);

            if(!$this->upload->do_upload('fotos')){
				print_r($config);
				print_r($this->upload->display_errors());
				exit();
			}else{
				$gbr = $this->upload->data();
				$gambar=$gbr['file_name'];
				$this->db->where(array("no_pendaftaran"=>$ceks))->update("tbl_siswa",array("buktibayar"=>$gambar));
				redirect('panel_siswa/uploadbukti');
			}
		}
	}

	public function uploadfoto() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			$data['user']			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['v_user']  		= $this->db->get_where('tbl_user', "id_user='1'")->row();
 			$data['judul_web'] 		= "Upload Foto ".ucwords($data['user']->row()->nama_lengkap);
			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/uploadfoto', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function douploadfoto() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			if(!is_dir("fotoo")) {
				mkdir("fotoo" , 0777);
			}
			$files = $_FILES;
			$this->load->library('upload');

			$_FILES['fotos']['name']= $files['fotoo']['name'];
			$_FILES['fotos']['type']= $files['fotoo']['type'];
			$_FILES['fotos']['tmp_name']= $files['fotoo']['tmp_name'];
			$_FILES['fotos']['error']= $files['fotoo']['error'];
			$_FILES['fotos']['size']= $files['fotoo']['size'];

            $config = array();
            $config['upload_path'] = 'fotoo/';
            $config['allowed_types'] = '*';
            $config['overwrite']     = true;
            $config['encrypt_name'] = true;
			$configs['quality']= '50%';

            $this->upload->initialize($config);

            if(!$this->upload->do_upload('fotos')){
				print_r($config);
				print_r($this->upload->display_errors());
				exit();
			}else{
				$gbr = $this->upload->data();
				$gambar=$gbr['file_name'];
				$this->db->where(array("no_pendaftaran"=>$ceks))->update("tbl_siswa",array("foto"=>$gambar));
				redirect('panel_siswa/biodata');
			}
		}
	}
	public function uploadijasah() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			$data['user']			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['v_user']  		= $this->db->get_where('tbl_user', "id_user='1'")->row();
 			$data['judul_web'] 		= "Upload Scan Ijasah/SKL ".ucwords($data['user']->row()->nama_lengkap);
			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/uploadijasah', $data);
			$this->load->view('siswa/footer');
		}
	}
	public function douploadijasah() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			if(!is_dir("ijs")) {
				mkdir("ijs" , 0777);
			}
			$files = $_FILES;
			$this->load->library('upload');

			$_FILES['fotos']['name']= $files['ijs']['name'];
			$_FILES['fotos']['type']= $files['ijs']['type'];
			$_FILES['fotos']['tmp_name']= $files['ijs']['tmp_name'];
			$_FILES['fotos']['error']= $files['ijs']['error'];
			$_FILES['fotos']['size']= $files['ijs']['size'];

            $config = array();
            $config['upload_path'] = 'ijs/';
            $config['allowed_types'] = '*';
            $config['overwrite']     = true;
            $config['encrypt_name'] = true;
			$configs['quality']= '50%';

            $this->upload->initialize($config);

            if(!$this->upload->do_upload('fotos')){
				print_r($config);
				print_r($this->upload->display_errors());
				exit();
			}else{
				$gbr = $this->upload->data();
				$gambar=$gbr['file_name'];
				$this->db->where(array("no_pendaftaran"=>$ceks))->update("tbl_siswa",array("ijasah"=>$gambar));
				redirect('panel_siswa/uploadijasah');
			}
		}
	}
	
	public function uploadkk() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			$data['user']			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['v_user']  		= $this->db->get_where('tbl_user', "id_user='1'")->row();
 			$data['judul_web'] 		= "Upload Scan Kartu Keluarga".ucwords($data['user']->row()->nama_lengkap);
			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/uploadkk', $data);
			$this->load->view('siswa/footer');
		}
	}
	public function douploadkk() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			if(!is_dir("kke")) {
				mkdir("kke" , 0777);
			}
			$files = $_FILES;
			$this->load->library('upload');

			$_FILES['fotos']['name']= $files['kke']['name'];
			$_FILES['fotos']['type']= $files['kke']['type'];
			$_FILES['fotos']['tmp_name']= $files['kke']['tmp_name'];
			$_FILES['fotos']['error']= $files['kke']['error'];
			$_FILES['fotos']['size']= $files['kke']['size'];

            $config = array();
            $config['upload_path'] = 'kke/';
            $config['allowed_types'] = '*';
            $config['overwrite']     = true;
            $config['encrypt_name'] = true;
			$configs['quality']= '50%';

            $this->upload->initialize($config);

            if(!$this->upload->do_upload('fotos')){
				print_r($config);
				print_r($this->upload->display_errors());
				exit();
			}else{
				$gbr = $this->upload->data();
				$gambar=$gbr['file_name'];
				$this->db->where(array("no_pendaftaran"=>$ceks))->update("tbl_siswa",array("kartu_keluarga"=>$gambar));
				redirect('panel_siswa/uploadkk');
			}
		}
	}
	
	public function uploadakta() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			$data['user']			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['v_user']  		= $this->db->get_where('tbl_user', "id_user='1'")->row();
 			$data['judul_web'] 		= "Upload Scan Akta Lahir".ucwords($data['user']->row()->nama_lengkap);
			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/uploadakta', $data);
			$this->load->view('siswa/footer');
		}
	}
	public function douploadakta() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			if(!is_dir("akt")) {
				mkdir("akt" , 0777);
			}
			$files = $_FILES;
			$this->load->library('upload');

			$_FILES['fotos']['name']= $files['akt']['name'];
			$_FILES['fotos']['type']= $files['akt']['type'];
			$_FILES['fotos']['tmp_name']= $files['akt']['tmp_name'];
			$_FILES['fotos']['error']= $files['akt']['error'];
			$_FILES['fotos']['size']= $files['akt']['size'];

            $config = array();
            $config['upload_path'] = 'akt/';
            $config['allowed_types'] = '*';
            $config['overwrite']     = true;
            $config['encrypt_name'] = true;
			$configs['quality']= '50%';

            $this->upload->initialize($config);

            if(!$this->upload->do_upload('fotos')){
				print_r($config);
				print_r($this->upload->display_errors());
				exit();
			}else{
				$gbr = $this->upload->data();
				$gambar=$gbr['file_name'];
				$this->db->where(array("no_pendaftaran"=>$ceks))->update("tbl_siswa",array("aktalahir"=>$gambar));
				redirect('panel_siswa/uploadakta');
			}
		}
	}  
}
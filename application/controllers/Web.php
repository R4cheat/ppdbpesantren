<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$data['v_user']  			  = $this->db->get_where('tbl_user', "id_user='1'")->row();
		$this->load->view('web/index', $data);
	}

	public function pendaftaran()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$data['v_user']  			  = $this->db->get_where('tbl_user', "id_user='1'")->row();
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}

		$this->db->order_by('id_pdd', 'ASC');
		$data['v_pdd'] = $this->db->get('tbl_pdd')->result();

		$this->db->order_by('id_penghasilan', 'ASC');
		$data['v_penghasilan'] = $this->db->get('tbl_penghasilan')->result();

		$this->db->where('ket_pekerjaan', 'ayah');
		$this->db->order_by('id_pekerjaan', 'ASC');
		$data['v_pekerjaan_ayah'] = $this->db->get('tbl_pekerjaan')->result();

		$this->db->where('ket_pekerjaan', 'ibu');
		$this->db->order_by('id_pekerjaan', 'ASC');
		$data['v_pekerjaan_ibu'] = $this->db->get('tbl_pekerjaan')->result();

		$this->db->order_by('id_pekerjaan', 'ASC');
		$this->db->group_by('nama_pekerjaan');
		$data['v_pekerjaan_wali'] = $this->db->get('tbl_pekerjaan')->result();

		$this->load->view('web/pendaftaran', $data);

		if (isset($_POST['btndaftar'])) {
			$this->db->order_by('id_siswa', 'DESC');
			$sql 		= $this->db->get('tbl_siswa');
			if ($sql->num_rows() == 0) {
			  $no_pendaftaran   = "PPDB-001";
			}else{
			  $noUrut 	 	= substr($sql->row()->no_pendaftaran, 8, 3);
			  $noUrut++;
			  $no_pendaftaran	  = "PPDB-".sprintf("%03s", $noUrut);
			}

		$nis							= $this->input->post('nis');
			$nisn							= $this->input->post('nisn');
			$nik							= $this->input->post('nik');
			$akta							= $this->input->post('akta');
			$nama_lengkap			= $this->input->post('nama_lengkap');
			$jk								= $this->input->post('jk');
			$tempat_lahir			= $this->input->post('tempat_lahir');
			$tgl_lahir				= $this->input->post('tgl_lahir')."-".$this->input->post('bln_lahir')."-".$this->input->post('thn_lahir');
			$agama						= $this->input->post('agama');
			$kwg						= $this->input->post('kwg');
			$status_keluarga	= $this->input->post('status_keluarga');
			$kakak				= $this->input->post('kakak');
			$adik				= $this->input->post('adik');
			$anak				= $this->input->post('anak');
			$anak_ytm				= $this->input->post('anak_ytm');
			$bahasa				= $this->input->post('bahasa');
			$alamat_siswa			= $this->input->post('alamat_siswa');
			$no_hp_siswa			= $this->input->post('no_hp_siswa');
			$tinggal			= $this->input->post('tinggal');
			$jarak		    	= $this->input->post('jarak');
			$gol_darah		    	= $this->input->post('gol_darah');
			$penyakit		    	= $this->input->post('penyakit');
			$kelainan_jasmani		    	= $this->input->post('kelainan_jasmani');
			$tinggi_badan			= $this->input->post('tinggi_badan');
			$berat_badan			= $this->input->post('berat_badan');
			$kesenian			= $this->input->post('kesenian');
			$olahraga			= $this->input->post('olahraga');
			$organisasi			= $this->input->post('organisasi');
			$lainnya			= $this->input->post('lainnya');
			$penerima_kartu_sosial			= $this->input->post('penerima_kartu_sosial');
			$kps			= $this->input->post('kps');
			$no_kps			= $this->input->post('no_kps');
			$pkh			= $this->input->post('pkh');
			$no_pkh			= $this->input->post('no_pkh');
			$kip			= $this->input->post('kip');
			$no_kip			= $this->input->post('no_kip');
			$kmrm			= $this->input->post('kmrm');
			$no_kmrm			= $this->input->post('no_kmrm');
			$transportasi			= $this->input->post('transportasi');
			$jarak_tempuh			= $this->input->post('jarak_tempuh');
			$waktu_tempuh			= $this->input->post('waktu_tempuh');
			$seragam			= $this->input->post('seragam');
			$jurusan			= $this->input->post('jurusan');
			$nama_ayah				= $this->input->post('nama_ayah');
			$nik_ayah				= $this->input->post('nik_ayah');
			$tempat_lahir_ayah			= $this->input->post('tempat_lahir_ayah');
			$tgl_lahir_ayah				= $this->input->post('tgl_lahir_ayah');
			$pdd_ayah					= $this->input->post('pdd_ayah');
			$pekerjaan_ayah		= $this->input->post('pekerjaan_ayah');
			$penghasilan_ayah	= $this->input->post('penghasilan_ayah');
			$no_hp_ayah				= $this->input->post('no_hp_ayah');
			$nama_ibu					= $this->input->post('nama_ibu');
			$nik_ibu					= $this->input->post('nik_ibu');
			$tempat_lahir_ibu			= $this->input->post('tempat_lahir_ibu');
			$tgl_lahir_ibu				= $this->input->post('tgl_lahir_ibu');
			$pdd_ibu					= $this->input->post('pdd_ibu');
			$pekerjaan_ibu		= $this->input->post('pekerjaan_ibu');
			$penghasilan_ibu	= $this->input->post('penghasilan_ibu');
			$no_hp_ibu				= $this->input->post('no_hp_ibu');
			$nama_wali				= $this->input->post('nama_wali');
			$nik_wali				= $this->input->post('nik_wali');
			$tempat_lahir_wali			= $this->input->post('tempat_lahir_wali');
			$tgl_lahir_wali				= $this->input->post('tgl_lahir_wali');
			$pdd_wali					= $this->input->post('pdd_wali');
			$pekerjaan_wali		= $this->input->post('pekerjaan_wali');
			$penghasilan_wali	= $this->input->post('penghasilan_wali');
			$no_hp_wali				= $this->input->post('no_hp_wali');
			$npsn							= $this->input->post('npsn');
			$nama_sekolah			= $this->input->post('nama_sekolah');
			$status_sekolah		= $this->input->post('status_sekolah');
			$model_un					= $this->input->post('model_un');
			$alamat_sekolah		= $this->input->post('alamat_sekolah');
			$thn_lulus				= $this->input->post('thn_lulus');
			$rayonisasi				= $this->input->post('rayonisasi');
			$tgl_siswa				= $this->Model_data->date('waktu_default');

			if ($_POST['total_nilai'] < 0) {
				$this->session->set_flashdata('msg',
					'
					<div class="alert alert-warning alert-dismissible" role="alert">
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
						 </button>
						 <strong>Gagal Mendaftar PPDB Online!</strong> Maaf <b>'.$nama_lengkap.'</b> tidak bisa mendaftar PPDB dikarenakan Total nilai Rata-Rata Rapor kurang dari 75. Terimakasih.
					</div>'
				);
				redirect('pendaftaran');
			}

					$data = array(
						'no_pendaftaran'		=> $no_pendaftaran,
						'password'				  => $nisn,
						'nis'					  		=> $nis,
						'nisn'				  		=> $nisn,
						'nik'				  			=> $nik,
						'akta'				  			=> $akta,
						'nama_lengkap'			=> $nama_lengkap,
						'jk'				  			=> $jk,
						'tempat_lahir'			=> $tempat_lahir,
						'tgl_lahir'				  => $tgl_lahir,
						'agama'				  	  => $agama,
						'kwg'					=> $kwg,
						'status_keluarga'		=> $status_keluarga,
						'kakak'					=> $kakak,
						'adik'					=> $adik,
						'anak'					=> $anak,
						'anak_ytm'					=> $anak_ytm,
						'bahasa'					=> $bahasa,
						'alamat_siswa'			=> $alamat_siswa,
						'no_hp_siswa'				=> $no_hp_siswa,
						'tinggal'					=> $tinggal,
						'jarak'					=> $jarak,
						'gol_darah'					=> $gol_darah,
						'penyakit'					=> $penyakit,
						'kelainan_jasmani'				=> $kelainan_jasmani,
						'tinggi_badan'				=> $tinggi_badan,
						'berat_badan'				=> $berat_badan,
						'kesenian'				=> $kesenian,
						'olahraga'				=> $olahraga,
						'organisasi'				=> $organisasi,
						'lainnya'				=> $lainnya,
						'penerima_kartu_sosial'				=> $penerima_kartu_sosial,
						'kps'				=> $kps,
						'no_kps'				=> $no_kps,
						'pkh'				=> $pkh,
						'no_pkh'				=> $no_pkh,
						'kip'				=> $kip,
						'no_kip'				=> $no_kip,
						'kmrm'				=> $kmrm,
						'no_kmrm'				=> $no_kmrm,
						'transportasi'				=> $transportasi,
						'waktu_tempuh'				=> $waktu_tempuh,
						'jarak_tempuh'				=> $jarak_tempuh,
						'seragam'				=> $seragam,
						'jurusan'				=> $jurusan,
						'nama_ayah'				  => $nama_ayah,
						'nik_ayah'				  => $nik_ayah,
						'tempat_lahir_ayah'			=> $tempat_lahir_ayah,
						'tgl_lahir_ayah'				  => $tgl_lahir_ayah,
						'pdd_ayah'				  => $pdd_ayah,
						'pekerjaan_ayah'		=> $pekerjaan_ayah,
						'penghasilan_ayah'	=> $penghasilan_ayah,
						'no_hp_ayah'				=> $no_hp_ayah,
						'nama_ibu'				  => $nama_ibu,
						'nik_ibu'				  => $nik_ibu,
						'tempat_lahir_ibu'			=> $tempat_lahir_ibu,
						'tgl_lahir_ibu'				  => $tgl_lahir_ibu,
						'pdd_ibu'				  	=> $pdd_ibu,
						'pekerjaan_ibu'			=> $pekerjaan_ibu,
						'penghasilan_ibu'		=> $penghasilan_ibu,
						'no_hp_ibu'				  => $no_hp_ibu,
						'nama_wali'				  => $nama_wali,
						'nik_wali'				  => $nik_wali,
						'tempat_lahir_wali'			=> $tempat_lahir_wali,
						'tgl_lahir_wali'				  => $tgl_lahir_wali,
						'pdd_wali'				  => $pdd_wali,
						'pekerjaan_wali'		=> $pekerjaan_wali,
						'penghasilan_wali'	=> $penghasilan_wali,
						'no_hp_wali'				=> $no_hp_wali,
						'npsn_sekolah'  	  => $npsn,
						'nama_sekolah'			=> $nama_sekolah,
						'status_sekolah'		=> $status_sekolah,
						'model_un'				  => $model_un,
						'alamat_sekolah'		=> $alamat_sekolah,
						'thn_lulus'				  => $thn_lulus,
						'rayonisasi'				=> $rayonisasi,
						'tgl_siswa'				  => $tgl_siswa
					);
					$this->db->insert('tbl_siswa',$data);


						// $this->session->set_flashdata('msg',
						// 	'
						// 	<div class="alert alert-success alert-dismissible" role="alert">
						// 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						// 			 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
						// 		 </button>
						// 		 <strong>Sukses!</strong> Berhasil ditambahkan.
						// 	</div>'
						// );
						$this->session->set_userdata('no_pendaftaran', "$no_pendaftaran");
						redirect('panel_siswa');

		}


	}

	public function logcs()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$data['v_user']  			  = $this->db->get_where('tbl_user', "id_user='1'")->row();
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}
		$ceks = $this->session->userdata('no_pendaftaran');
		if(isset($ceks)) {
			redirect('panel_siswa');
		}else{
			$this->load->view('web/index', $data);

				if (isset($_POST['btnlogin'])){
						 $username = $_POST['username'];
						 $pass	   = $_POST['password'];

						 $this->db->like('tgl_siswa', date('Y'), "after");
						 $query  = $this->db->get_where('tbl_siswa', "no_pendaftaran='$username'");
						 $cek    = $query->result();
						 $cekun  = $cek[0]->no_pendaftaran;
						 $jumlah = $query->num_rows();

						 if($jumlah == 0) {
								 $this->session->set_flashdata('msg',
									 '
									 <div class="alert alert-danger alert-dismissible" role="alert">
									 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;&nbsp;</span>
											</button>
											<strong>No. Pendaftaran "'.$username.'"</strong> belum terdaftar.
									 </div>'
								 );
								 redirect('logcs');
						 } else {
										 $row = $query->row();
										 $cekpass = $row->password;
										 if($cekpass <> $pass) {
												$this->session->set_flashdata('msg',
													 '<div class="alert alert-warning alert-dismissible" role="alert">
													 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;&nbsp;</span>
															</button>
															<strong>No. Pendaftaran atau NISN Salah!</strong>.
													 </div>'
												);
												redirect('logcs');
										 } else {

																$this->session->set_userdata('no_pendaftaran', "$cekun");

												 			 	redirect('panel_siswa');
										 }
						 }
				}
		}
	}


	function error_not_found(){
		$this->load->view('404_content');
	}

}
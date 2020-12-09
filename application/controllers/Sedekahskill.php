<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sedekahskill extends CI_Controller {

	public function index()
	{
		$install = $this->db->query("ALTER TABLE `ppdb`.`tbl_siswa` ADD COLUMN `buktibayar` varchar(255) NULL AFTER `tgl_lahir_wali`;");
		if($install){
			echo 'Install Success';
		}else{
			echo 'Install Failed';
		}
	}
}
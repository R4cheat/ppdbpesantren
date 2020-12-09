<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if(!function_exists('_cmbpendidikan')){
  function _cmbpendidikan() {
    $ci =& get_instance();
    $ci->db->order_by('id_pdd', 'ASC');
    $data[0] = array("nama_pdd"=>"","nama_pdd"=>"Pilih Pendidikan");
    $db = $ci->db->get('tbl_pdd')->result_array();
    $data= array_merge($data,$db);
    return dropdown_format_value($data, "nama_pdd", "nama_pdd");
  }
}


if(!function_exists('_cmbpekerjaan')){
  function _cmbpekerjaan() {
    $ci =& get_instance();
    $ci->db->order_by('id_pekerjaan', 'ASC');
    $data[0] = array("nama_pekerjaan"=>"","nama_pekerjaan"=>"Pilih Pekerjaan");
    $db = $ci->db->get('tbl_pekerjaan')->result_array();
    $data= array_merge($data,$db);
    return dropdown_format_value($data, "nama_pekerjaan", "nama_pekerjaan");
  }
}


if(!function_exists('_cmbpenghasilan')){
  function _cmbpenghasilan() {
    $ci =& get_instance();
    $ci->db->order_by('id_penghasilan', 'ASC');
    $data[0] = array("nama_penghasilan"=>"","nama_penghasilan"=>"Pilih penghasilan");
    $db = $ci->db->get('tbl_penghasilan')->result_array();
    $data= array_merge($data,$db);
    return dropdown_format_value($data, "nama_penghasilan", "nama_penghasilan");
  }
}


if(!function_exists('_cmbjekel')){
  function _cmbjekel() {
    $ci =& get_instance();
    $data = array(
        array("key"=>"","value"=>"Pilih Jenis Kelamin"),
        array("key"=>"L","value"=>"Laki-laki"),
        array("key"=>"P","value"=>"Perempuan")
    );
    return dropdown_format_value($data, "key", "value");
  }
}

if(!function_exists('_cmbjurusan')){
  function _cmbjurusan() {
    $ci =& get_instance();
    $data = array(
        array("key"=>"","value"=>"Pilih Jurusan"),
        array("key"=>"IPA","value"=>"IPA"),
        array("key"=>"IPS","value"=>"IPS")
    );
    return dropdown_format_value($data, "key", "value");
  }
}

if(!function_exists('_cmbtinggal')){
  function _cmbtinggal() {
    $ci =& get_instance();
    $data = array(
        array("key"=>"","value"=>"Pilih Tinggal"),
        array("key"=>"Orang Tua","value"=>"Orang Tua"),
        array("key"=>"Saudara","value"=>"Saudara"),
		array("key"=>"Asrama","value"=>"Asrama"),
		array("key"=>"Kost","value"=>"Kost"),
    );
    return dropdown_format_value($data, "key", "value");
  }
}


if(!function_exists('_cmbagama')){
  function _cmbagama() {
    $ci =& get_instance();
    $data = array(
        array("key"=>"","value"=>"Pilih Agama"),
        array("key"=>"Islam","value"=>"Islam"),
        array("key"=>"Kristen Katolik","value"=>"Kristen Katolik"),
        array("key"=>"Kristen Protestan","value"=>"Kristen Protestan"),
        array("key"=>"Hindu","value"=>"Hindu"),
        array("key"=>"Budha","value"=>"Budha"),
        array("key"=>"Konghuchu","value"=>"Konghuchu"),
      );
    return dropdown_format_value($data, "key", "value");
  }
}


if(!function_exists('_cmbgoldarah')){
  function _cmbgoldarah() {
    $ci =& get_instance();
    $data = array(
        array("key"=>"","value"=>"Pilih Golongan Darah"),
        array("key"=>"A","value"=>"A"),
        array("key"=>"B","value"=>"B"),
        array("key"=>"AB","value"=>"AB"),
        array("key"=>"O","value"=>"O"),
        array("key"=>"Tidah Tahu","value"=>"Tidak Tahu"),
      );
    return dropdown_format_value($data, "key", "value");
  }
}


if(!function_exists('_cmbstatus_keluarga')){
  function _cmbstatus_keluarga() {
    $ci =& get_instance();
    $data = array(
        array("key"=>"","value"=>"Pilih Status dalam Keluarga"),
        array("key"=>"Anak Kandung","value"=>"Anak Kandung"),
        array("key"=>"Anak Angkat","value"=>"Anak Angkat"),
      );
    return dropdown_format_value($data, "key", "value");
  }
}


if(!function_exists('_cmbtransportasi')){
  function _cmbtransportasi() {
    $ci =& get_instance();
    $data = array(
        array("key"=>"","value"=>"Pilih Transportasi"),
        array("key"=>"Jalan Kaki","value"=>"Jalan Kaki"),
        array("key"=>"Naik Sepeda","value"=>"Naik Sepeda"),
		array("key"=>"Kendaraan Pribadi","value"=>"Kendaraan Pribadi"),
		array("key"=>"Kendaraan Umum","value"=>"Kendaraan Umum"),
		array("key"=>"Antar Jemput","value"=>"Antar Jemput"),
      );
    return dropdown_format_value($data, "key", "value");
  }
}


if(!function_exists('_cmbseragam')){
  function _cmbseragam() {
    $ci =& get_instance();
    $data = array(
        array("key"=>"","value"=>"Pilih Seragam"),
        array("key"=>"M","value"=>"M"),
        array("key"=>"L","value"=>"L"),
		array("key"=>"XL","value"=>"XL"),
		array("key"=>"XXL","value"=>"XXL"),
		array("key"=>"XXXL","value"=>"XXXL"),
      );
    return dropdown_format_value($data, "key", "value");
  }
}


if(!function_exists('_cmbstatus_sekolah')){
  function _cmbstatus_sekolah() {
    $ci =& get_instance();
    $data = array(
        array("key"=>"","value"=>"Pilih Status Sekolah"),
        array("key"=>"NEGERI","value"=>"NEGERI"),
        array("key"=>"SWASTA","value"=>"SWASTA"),
      );
    return dropdown_format_value($data, "key", "value");
  }
}


if(!function_exists('_cmbmodel_un')){
  function _cmbmodel_un() {
    $ci =& get_instance();
    $data = array(
        array("key"=>"","value"=>"Pilih Model Ujian Nasional"),
        array("key"=>"UNBK","value"=>"UNBK"),
        array("key"=>"UNKP","value"=>"UNKP"),
      );
    return dropdown_format_value($data, "key", "value");
  }
}


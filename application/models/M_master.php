<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model {
    var $tablePrimary;
    public function __construct()
    {
        parent::__construct();
        $this->tablePrimary = "test";
    }
    function getLogin($where='',$table="",$select ='*')
    {
        if ($table==null) {
            $table = $this->tablePrimary;
        }
        if($where != null){
            return $this->db->select($select)->get_where($table,$where);
        }
        return $this->db->select($select)->get($table);
    }
    function getData($where='',$table="",$like="",$order = "",$orwhere="")
    {
        $table = ($table=="")?$tablePrimary:$table;
        $this->db->select('*');
        if($like != null){
            $this->db->like($like);
        }
        if($where != null){
            $this->db->where($where);
        }

        if($orwhere != null){
            $this->db->or_where($orwhere);
        }
        if($order != null){
             $this->db->order_by(key($order), $order[key($order)]);
        }
        return $this->db->get($table);
    }
    function getCheck($where='',$table="",$like=array(),$order = "")
    {
        $table = ($table=="")?$tablePrimary:$table;
        $this->db->select('*');
        if(count($like)>0){
            $n=0;
            foreach ($like as $key => $value) {
                if ($n==0) {
                    $this->db->like($key,$value);
                }else{
                    $this->db->or_like($key, $value);
                }
                $n++;
            }
        }
        if($where != null){
            $this->db->where($where);
        }
        if($order != null){
            $this->db->order_by($order);
        }
        return $this->db->get($table);
    }
    function getSave($data='',$table="")
    {
        $table = ($table=="")?$tablePrimary:$table;
        return $this->db->insert($table,$data);
    }
    function getMultiSave($data='',$table="")
    {
        $table = ($table=="")?$tablePrimary:$table;
        return $this->db->insert_batch($table, $data);
    }
    function getUpdate($data='',$where='',$table="")
    {
        $table = ($table=="")?$tablePrimary:$table;
        return $this->db->where($where)->update($table,$data);
    }
    function getDelete($where='',$table="")
    {
        $table = ($table=="")?$tablePrimary:$table;
        $where = array_filter($where);
        return $this->db->where($where)->delete($table);
    }
    function getQuery($str='')
    {
        return $this->db->query($str);
    }

}

/* End of file M_admin.php */
/* Location: ./application/controllers/M_admin.php */
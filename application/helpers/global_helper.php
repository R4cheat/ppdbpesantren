<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if(!function_exists('menu_item')){
  function _pe($var ="") {
    print_r($var);
    exit();
  }
}
if(!function_exists('_lastQuery')){
  function _lastQuery($var ="") {
    $ci =& get_instance();
    print_r($ci->db->last_query());
    exit();
  }
}
if(!function_exists('_post')){
  function _post($var ="") {
    $ci =& get_instance();
    print_r($ci->input->post());
    exit();
  }
}
if(!function_exists('_get')){
  function _get($var ="") {
    $ci =& get_instance();
    print_r($ci->input->get());
    exit();
  }
}
if(!function_exists('_pjson')){
  function _pjson($var ="") {
    $ci =& get_instance();
    $getData= $ci->output
          ->set_content_type('application/json')
          ->set_output(json_encode($var))->_display();
        exit();
  }
}
if(!function_exists('_loadView')){
  function _loadView($data ="") {
    $ci =& get_instance();
    $ci->load->view('../../layouts/index',$data);
  }

}
if(!function_exists('_btn')){
  function _btn($url="#",$text="",$icon="", $classJs="",$arrData=array())
  {
    $attrData = "";
    foreach ($arrData as $key => $value) {
      $attrData .= $key."=\"".$value ."\" ";
    }
    $icon = '<i class="'.$icon.'"></i> ';
    if(empty($icon)){
      $icon=" ";
    }
    $btn = '<button type="button" class="btn '.$classJs.'" '.$attrData.' >'.$icon.$text.'</button>';
    if($url!="#"){
      $btn = '<a href="'.$url.'" class="btn '.$classJs.'" '.$attrData.' >'.$icon.$text.'</a>';
    }
    return $btn;
  }
}
if(!function_exists('dropdown_format_value')){
  function dropdown_format_value($data, $var_value, $var_text)
  {
    $result = [];
    if(is_array($data)){
      $result = array_reduce($data, function($carry, $item) use ($var_value, $var_text){
        $carry[$item["$var_value"]] = $item["$var_text"];
        return $carry;
      });
    }
    return $result;
  }
}
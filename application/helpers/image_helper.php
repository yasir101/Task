<?php


if (!function_exists('image_upload')) {
     function image_upload($file_name,$entity)
     {
        $CI = &get_instance();
        $config['upload_path']        =  'assets/admin_assets/'.$entity.'/';
        
        if (!file_exists($config['upload_path'])) {
            mkdir($config['upload_path']);
        }

        $config['allowed_types']      =  'gif|jpg|png|jpeg|pdf|docx|xlsx|xls|ppt|mp3|mpeg|mpg|';
        $CI->load->library('upload', $config);
        
        if($CI->upload->do_upload($file_name))
        {
            return array("status"=>true,"file_name"=>$CI->upload->data('file_name'));
        }
        else
        {
            return array("status"=>false);
        } 
        
    }
}

if(!function_exists('rename_file')) {
    function rename_file($file_name)
    {
        $file_name_info=pathinfo($file_name);
        $file_extension=$file_name_info['extension'];
        $file_name=$file_name_info['filename'];
        $curr_date_time=strtotime(date("Y:m:d H:i:s"));
        $new_file_name=$curr_date_time."--".$file_name.".".$file_extension;
        return $new_file_name;
    }
}




 ?>

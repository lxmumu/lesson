<?php
/**
 * @Author: anchen
 * @Date:   2017-08-09 20:31:57
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-12 14:38:54
 */
if (isset($_FILES['file'])) {
    $info = $_FILES['file'];
    verify_upload($info);
}
function verify_upload($file_info){
    if ($file_info['error']>0) {
        $error_no = $file_info['error'];
         switch ($error_no) {
        case UPLOAD_ERR_INI_SIZE:
          echo'文件超出ini配置范围';
            break;
          case UPLOAD_ERR_FORM_SIZE:
          echo '文件大小超出表单设置';
            break;
          case UPLOAD_ERR_PARTIAL:
          echo'文件没有上传完';
            break;
          case UPLOAD_ERR_NO_FILE:
           echo '没有文件上传';
            break;

        default:
           echo'未知错误';
            break;
    }
        return ;
    }
    $file_size = $file_info['size'];
    $max_size = 50000000;
    if ($file_size>$max_size) {
        echo'文件超出限制';
        continue;
    }
    $file_type = $file_info['type'];
    // var_dump($file_type);
    // exit;
    $type = explode('/', $file_type);
    $file_type= end($type);

    $dir='./x/uplode';
   $dir_file = opendir($dir);
    while ($dir_name = readdir($dir_file)) {
      if ($dir_name =='.'||$dir_name =='..')
         continue;
    }
    $dir_path=$dir.DIRECTORY_SEPARATOR.$dir_name;
    if (!file_exists($dir_path)) {
        mkdir($dir_path);
        }
        $file_name= time().rand(1,999).'.'.$file_type;
        $file_path = $dir_path.DIRECTORY_SEPARATOR.$file_name;

        $tmp_path = $file_info['tmp_name'];
         if(is_uploaded_file($tmp_path)){
            if (move_uploaded_file($tmp_path, $file_path)) {
                echo'成功';
            }else{
                echo '失败';
            }
         }else{
            echo '这不是一个上传的文件';
         }


}
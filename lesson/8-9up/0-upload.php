<?php
/**
 * @Author: anchen
 * @Date:   2017-08-09 09:58:37
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-09 15:09:12
 */
//文件的上传
//单文件上传
//多文件上传
//
//php配置，添加上传的大小的限制
//php.ini
/*
 开启文件上传
 file_uplods = On
 设置临时目录
 upload_tmp_dir = ;
上传文件大小的限制
upload_max_filesize = 10M
上传文件数量的限制
max_file_uploads = 20
post方式提交的最大数据限制（一般大于upload_max_filesize）
post_max_size = 20M
 */

//通过表单提交的方式上传文件
//需要注意
//1，表单的请求方法必须是post
//2，需要用到input type=file
//3，提交文件必须声明一个属性  enctype='multipart/form-data'（只有文件上传的时候才用）
//4，添加隐藏的input MAX_FILE_SIZE 值 是字节


//$_POST 用来接收表单的数据
//$_FILES 接收文件信息
//
// var_dump($_POST);
// echo '<hr>';
// var_dump($_FILES);


if (isset($_FILES['pic'])) {
   $info = $_FILES['pic'];


   $arrs = array();

    foreach ($info as $key => $value) {
        //key: name-type-tmp_type-size-error
        //value array(0:value1 1:value2  2:value3) 3个值
       if(is_array($value)){
         $i =0;
         foreach ($value as $att_key => $att_value) {
            //$att_key:0 1 2
            //$att_value: value1 value2 value3
         $arrs[$i][$key]=$att_value;
          $i++;
         }
       }
    }
    var_dump($info);
    echo '<hr>';
    var_dump($arrs);
foreach ($arrs as $file_info) {
    verify_upload($file_info);
}
}

//验证上传信息
function  verify_upload ($file_info){
    // $file_info = $_FILES['pic'];
//error = 0没有错误
if ($file_info['error']>0) {
    $error_no = $file_info['error'];
    /*
    错误代码
    UPLOAD_ERR_INI_SIZE
    值：1
    超过了 php.ini中设置的uppload_max_filesizes的限制的值
    UPLOAD_ERR_FORM_SIZE
    值2
    上传的文件大小超过了表单form 中这只MAX_FILE_SIZE 的限制的值
    UPLOAD_ERR_PARTIAL
    值 3
    文件部分上传，没有上传完
    UPLOAD_ERR_NO_FILE
    值4
    没有文件被上传

     */
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
   //大小限制
   $file_size = $file_info['size'];
   $max_size = 5000000;
   if ($file_size>$max_size) {
       echo'文件超过最大限制';
       return;
   }
   //类型限制
   $file_type = $file_info ['type'];
   //end 获得数组中的最后一位元素
   $type = explode('/', $file_type);
   $file_type = end($type);
   // 得到的类型 mime类型 image/png  image/jpeg
  $mimeType = ['png','jpg','gif','jpeg'];
if (!in_array($file_type, $mimeType) ){
   echo '类型不对';
  return;
}
//处理上传文件
$upload_dir = './upload';
 if (!file_exists($upload_dir)){
    mkdir($upload_dir);
}
//处理一个唯一的文件名   时间戳+ 随机数
$file_name =time().rand(1,999).'.'.$file_type;
//获得文件的完整路径
$file_path = $upload_dir.DIRECTORY_SEPARATOR.$file_name;

//处理文件
$tmp_path = $file_info['tmp_name'];
//临时文件，会在php代码执行完毕后自动清除
// is_uploaded_file(path) 判断文件是否通过http post上传上的
// 必须指定类似$_FILES['userfile']['tmp_name'] 的变量
if (is_uploaded_file($tmp_path)) {
//move_uploaded_file(path, new_path)上传文件移动到新的位置（上传文件，移动指定文件）
   if (move_uploaded_file($tmp_path, $file_path)) {
      echo '成功';
   }else{
    echo'失败';
   }
}else{
    echo '这不是一个上传的文件';
}

}





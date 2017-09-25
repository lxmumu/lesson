<?php
/**
 * @Author: anchen
 * @Date:   2017-08-08 11:04:09
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-08 12:51:56
 */
// flock(fp, operation, &wouldblock)


//留言板
//功能：
//1,发布
//2,文件存储的方式保持到本地
//3,读取本地文件并显示
//
//

// var_dump($_POST);
if (isset($_POST['sub'])) {
   //自定义数据组织方式
   // 小王<1>留言title<1>留言内容content<1>留言时间time<n>
   // 小王<1>留言title<1>留言内容content<1>留言时间time<n>

 extract($_POST);
 $time = time();

 $file_content = "{$user}<1>{$title}<1>{$content}<1>{$time}<n>";

 $file_name = 'liuyan.txt';
//写入数据
 write_file($file_name,$file_content);

 //读取数据并显示
 $read_content = read_file($file_name);

 //使用<n>分割，多条
 $lists = explode('<n>',$read_content);

//处理数据
foreach ($lists as  $value) {
  $info = explode('<1>',$value);
  if (count($info)>1) {
      list($user,$title,$content,$time) = $info;
      //拿到数据后显示
      echo "<p>
    用户:{$user} 标题:{$title} 内容:{$content}  时间:{$time}
      </p>";
  }
}
}


//写入程序
function  write_file($file_name,$content){

    //创建+追加
 $fp = fopen($file_name,'a');
 if (flock($fp,LOCK_EX)) {//写入之前加锁
  fwrite($fp,$content);
    //写完之后解锁
    flock($fp,LOCK_UN);
 }
 fclose($fp);

}
//读取程序
function  read_file($file_name){
    $fp = fopen($file_name,'r');
    //加上读取锁
    if (flock($fp,LOCK_SH)) {
        $content = fread($fp,filesize($file_name));
        //读取完毕解锁
        flock($fp,LOCK_UN);
    }
    fclose($fp);
    return $content;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>留言板</title>
</head>
<body>
   <form action="2-file-lock.php" method="post">
        user:<input type="text" name="user" /> <br />
        title:<input type="text" name="title"><br />
        content:<textarea name="content" cols="30" rows="10"></textarea>
        <input type="submit" value ="发布留言" name="sub" />
        </form>
</body>
</html>
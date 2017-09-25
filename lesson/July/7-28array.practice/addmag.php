 <?php
/**
 * @Author: anchen
 * @Date:   2017-07-31 09:11:43
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-01 09:16:02
 */
//添加
//获得用户提交数据，添加到数组
include_once 'function.php';

if (isset($_GET['action'])) {
   $action = $_GET['action'];
   if ($action == 'add'){
       if($_POST['user']&&$_POST['mag']){
        //先组织每条留言的数据
        $mag = [$_POST['user'],$_POST['mag']];

  $magList = show();
        //组织完留言数据后写入本地，1本地已有数据 2.本地没有数据
        // $filename = 'mag.txt';
        // $fileContent = file_get_contents($filename);
        // if ($fileContent) {
            // 本地数据-将文件的内容，反序列化成数组
        //     $magList = unserialize($fileContent);
        // }else{
            // 本地没数据
        //     $magList = array();
        // }
        //在组织留言列表的数据
         $magList[] = $mag;
        // 将最新的数据写入本地
         $res =  file_put_contents($fileName,serialize($magList));
            if ($res) {
                   echo "写入成功 ,3秒后跳入首页!<br> ";
                   echo '<meta http-equiv="refresh" content="3;url=showmag.php" />';
            } else{
                echo '写入失败';
            }
        }else{
            echo '用户名和留言，不能为空';
        }
    }
}

//将数组写入文件
//自动跳转首页
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!-- <meta   http-equiv="refresh" content="3:url =showmag.php" /> -->
    <title>添加留言</title>
</head>
<body>
   <form action="addmag.php?action=add"  method="post">
   用户：
   <input type="text"  name="user"   /><br />
    留言：
    <textarea name="mag"  cols="30" rows="10"></textarea>
    <input type="submit"    value="提交留言" />
    </form>
</body>
</html>

<?php
/**
 * @Author: anchen
 * @Date:   2017-07-28 20:19:57
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-28 21:06:26
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>添加留言</title>
    <style>
body{
    margin: 0;
}
table{
    width: 900px;
    /* height: 800px; */
    border-collapse: collapse;
background-color: cyan;
}
 .to{
    height:20px;
}
 .ts{
    height:10px;
}
 .tt{
    height:50px;
}
 .tf{
    height:300px;
}
 .tl{
    height:15px;
}

tr ,td{
    border:1px solid black;
}
tr td:first-child{
    width:20px;
}

    </style>

</head>
<body>

    <h1>添加留言页面</h1>
    <table>
       <tr class="to">
           <td>留言者</td>
           <td> <input type="text" value="请输入您的昵称" /></td>
       </tr>
       <tr class="ts">
           <td>标题</td>
           <td><input type="text"  value="请输入标题" /></td>
       </tr class="tt">
       <tr>
           <td>内容</td>
           <td><textarea name="" id="" cols="50" rows="15" ></textarea> </td>
       </tr>
       <tr class="tf">
           <td>心情</td>
           <td>
         <img src="images/1.gif" alt="" />;
         <img src="images/2.gif" alt="" />;
         <img src="images/3.gif" alt="" />;
         <img src="images/4.gif" alt="" />;
         <img src="images/5.gif" alt="" />;
         <img src="images/6.gif" alt="" />;
         <img src="images/7.gif" alt="" />;
         <img src="images/rand.gif" alt="" />;
           </td>
       </tr>
       <tr class="tl">
           <td colspan="2">
     <a href="practice.php#page"><input type="button"  value="发布提交"  /></a>
           </td>

       </tr>



    </table>
</body>
</html>
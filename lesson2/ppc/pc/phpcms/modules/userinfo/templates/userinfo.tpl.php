<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>userinfo</title>
</head>
<link rel="stylesheet" href="<?php echo BS_PATH;?>css/bootstrap.min.css" />
<script src="<?php echo JS_PATH ?>/jquery.min.js"></script>
<script src="<?php echo BS_PATH ?>js/bootstrap.min.js"></script>
<style type='text/css'>
    th{
        text-align: center;
    }
</style>
<body>
<div class="container">
<p/>
    <table class="table table-striped table-bordered text-center">
        <th>id</th>
        <th>username</th>
        <th>age</th>
        <th>height</th>
        <th>操作</th>
        <?php
         foreach ($info as $key => $v) {
            echo"<tr><td>$v[id]</td>
            <td>$v[username]</td>
            <td>$v[age]</td>
            <td>$v[height]</td>
            <td><a href='?m=userinfo&c=userinfo&a=edit&pc_hash=$hash&id=$v[id]' class='btn btn-primary'>修改</a>&nbsp&nbsp <a href='?m=userinfo&c=userinfo&a=del&pc_hash=$hash&id=$v[id]' class='btn btn-danger'>删除</a></td>
            </tr>";
         }
        ?>
    </table>


</div>
</body>
</html>
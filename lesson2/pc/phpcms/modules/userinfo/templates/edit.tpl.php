<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>edit</title>
    <link rel="stylesheet" href="<?php echo BS_PATH;?>css/bootstrap.min.css" />
<script src="<?php echo JS_PATH ?>/jquery.min.js"></script>
<script src="<?php echo BS_PATH ?>js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="?m=userinfo&c=userinfo&a=update&pc_hash=<?php echo $hash;?>" method="post">
          <div class="form-group">
              <label for="">
                用户名：
              </label>
              <input type="text" name='username' class='form-control'  placeholder="username" value='<?php echo $rows[username]?>'/>
           </div>
           <div class="form-group">
              <label for="">
                age：
              </label>
              <input type="text" name='age' class='form-control' placeholder='age' value='<?php echo $rows[age]?>'/>
           </div>
           <div class="form-group">
              <label for="">
                height：
              </label>
              <input type="text" name='height' class='form-control' placeholder='height' value='<?php echo $rows[height]?>'/>
           </div>

           <input type="hidden" class="form-control" name='id' value='<?php echo $rows[id]?>' />

           <div class="form-group">
              <input type="submit" value='修改' class="btn btn-primary" />
           </div>
</form>


</div>
</body>
</html>
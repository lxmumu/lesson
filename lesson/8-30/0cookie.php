<?php
/**
 * @Author: anchen
 * @Date:   2017-08-30 14:40:34
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-30 14:57:41
 */

//使用cookie模拟自动登录

//保持登录状态，需要将用户的信息保持到本地

//设置cokie
setcookie('user', '小名', time()+10);


//如果本地有则直接登录
//如果本地没有，就让用户登录
//

if ($_COOKIE['user']) {
    $user=$_COOKIE['user'];
    echo"用户{$user}自动登录了";
}else{
    echo'首次登陆';
    setcookie('user', '小名', time()+60);
}

// cookie 原理，就是浏览器的本地缓存文件，将数据写如到浏览器缓存目录下，瞎猜使用的时候直接从缓存目录中读取
// cookie的使用
// 设置cookie： setcookie(key,value,time);
// 使用cookie：$_COOKIE;
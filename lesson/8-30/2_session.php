<?php
/**
 * @Author: anchen
 * @Date:   2017-08-30 16:24:27
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-30 17:05:19
 */
// session 本质 将用户需要的数据，保持到本地（服务器）
// cookie所说的本地（客户端所在的电脑）
//session的运行原理，是session_start时，系统自动生成session_id和对应的文件来保持数据，并将session_id保持在cookie中，当浏览器关闭的时候cookie失效，session就无法使用（其实文件并没有被删除）
//可以使用自己添加的cookie的方式，保持住session的生命周期
//从运行机制中我们可以看出，session是一栏cookie而存活的，如果cookie失效了那么session也不能使用了


   //session 的使用
   //开启会话
   session_start();
   //存数据
   $_SESSION['user']='xiaoming';
//自定义宝石session_id在cooki中的时间，就可以持续拥有session
  setcookie(session_name(),session_id(),time()*3600);
   //session 的销毁
   //

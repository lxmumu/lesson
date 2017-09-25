<?php
/**
 * @Author: anchen
 * @Date:   2017-08-30 16:32:53
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-30 17:29:14
 */
//获取session的内容
session_start();
var_dump($_SESSION);


//销毁session
session_destroy();


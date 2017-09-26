<?php
/**
 *  index.php PHPCMS 入口
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-1
 */
 //PHPCMS根目录

define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

include PHPCMS_PATH.'/phpcms/base.php';
//  $user= pc_base::load_sys_class('user','',1);
//$user->test();

//pc_base::load_sys_func('user');
//test();
// $user=pc_base::load_app_class('user','link','1');
// $user->test();
//
// pc_base::load_app_func('user','link');
//test();
pc_base::creat_app();

?>
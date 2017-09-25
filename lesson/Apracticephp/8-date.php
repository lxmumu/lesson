<?php
/**
 * @Author: anchen
 * @Date:   2017-08-02 16:31:39
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-02 20:36:29
 */
echo (strtotime("2017-08-02") - strtotime("2017-07-01"))/86400;
//白天8.00-20.00的时间段
echo '<hr>';
$Y = date("Y",time());
$m = date("m",time());
$d = date("d",time());
$star_time = mktime(8, 0, 0, $m, $d, $Y);
$end_time = mktime(20, 0, 0, $m, $d, $Y);
$time=time();
// if ($time>=$start_time&&$time<=$end_time) {
//
// }
// $time=time();
echo date('r',$end_time);
echo'<hr>';
echo '<br>'."微秒".microtime(true);//微秒1501674794.4501
echo '<br>'."微秒".microtime();//微秒0.45011000 1501674794
echo '<hr>';
echo $star_time =strtotime(date("Y-m-d",time()));//0点时间戳
echo'<br>'. $end_time=strtotime(date("Y-m-d",time())."23:59:59");//23.59.59点时间戳
$dotime = "18339232487";
echo'<br>'.date("Y-m-d H:i:s",$dotime);//2006-09-27 06:21:43

echo'<br>'.date('c',strtotime( "-7 days"));

echo'<hr>';
//将秒转化为小时 分
function  sec2time($sec){
  $sec=round($sec/60);
 if ($sec>=60){
$hour =floor($sec/60);
$min= $sec%60;
$res =$hour.'小时';
$min!=0&&$res.=$min.'分';

 }else{
    $res =$sec.'分钟';
 }
return $res;
}

 $times= sec2time(12000);
echo  $times;
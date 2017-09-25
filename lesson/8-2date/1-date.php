 <?php
/**
 * @Author: anchen
 * @Date:   2017-08-02 10:12:06
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-28 09:27:23
 */
 echo '<br>'. date_default_timezone_get();
   date_default_timezone_set('PRC');
   date_default_timezone_set('Asia/Shanghai');
/*
DateTime::ATOMDATE_ATOM Atom (example: 2005-08-15T15:52:01+00:00)  DateTime::COOKIEDATE_COOKIE HTTP Cookies (example: Monday, 15-Aug-2005 15:52:01 UTC)  DateTime::ISO8601DATE_ISO8601 ISO-8601 (example: 2005-08-15T15:52:01+0000)

Note:  This format is not compatible with ISO-8601, but is left this way for backward compatibility reasons. Use DateTime::ATOM or DATE_ATOM for compatibility with ISO-8601 instead.
DateTime::RFC822DATE_RFC822 RFC 822 (example: Mon, 15 Aug 05 15:52:01 +0000)  DateTime::RFC850DATE_RFC850 RFC 850 (example: Monday, 15-Aug-05 15:52:01 UTC)  DateTime::RFC1036DATE_RFC1036 RFC 1036 (example: Mon, 15 Aug 05 15:52:01 +0000)  DateTime::RFC1123DATE_RFC1123 RFC 1123 (example: Mon, 15 Aug 2005 15:52:01 +0000)  DateTime::RFC2822DATE_RFC2822 RFC 2822 (example: Mon, 15 Aug 2005 15:52:01 +0000)  DateTime::RFC3339DATE_RFC3339 Same as DATE_ATOM (since PHP 5.1.3)  DateTime::RSSDATE_RSS RSS (example: Mon, 15 Aug 2005 15:52:01 +0000)  DateTime::W3CDATE_W3C World Wide Web Consortium (example: 2005-08-15T15:52:01+00:00)
 */
   echo date(DATE_RFC2822);
   //时间的显示，date函数，对时间戳进行格式化
   //时间戳 time(),19700101~当前秒数
   echo '<br>'.time();

   echo'<br>'.  date('Y-m-d H:i:s',time());
   //2017-08-02 10:26:35
//格式化符号
//---日
//d 月份中的天 显示：01，02，03
//j 天显示：1，2，3，4
//S 天英文的后缀例子：st,nd,rd
//z 年中的第几天 0-365
//
echo '<br>'.date('d');//02
echo '<br>'.date('j');//2
echo '<br>'.date('S');//nd
echo '<br>'.date('z');//213


//星期一
// D 星期中的第几天,英文前的三个字母 Mon 到 Sun
// l 星期几，完整的英文 例：Sunday
// w 星期中的第几天 ，数字（0-6）例：0-周日
// N 星期中的第几天，数字（1-7）例：1-周一
// W 年份中的第几周，例：23 24周

echo '<br>'.date('D');
echo '<br>'.date('l');
echo '<br>'.date('w');
echo '<br>'.date('W');
echo '<br>'.date('N');

//月--
//F 月的完整单词
//M  月份三个字母缩写
//m数字月份 - 自动补零
//n 数字月份 - 不自动补零
//t 当前月份的天数

echo '<br>'.date('F');
echo '<br>'.date('M');
echo '<br>'.date('m');
echo '<br>'.date('n');
echo '<br>'.date('t');

//年
//Y 4位数字年份
//y 2位数字年份
//L 判断是否是闰年 1 闰年 0 非闰年
//o 和Y相等
echo '<br>'.date('Y');
echo '<br>'.date('y');
echo '<br>'.date('L');
echo '<br>'.date('o');

//时间
//时，分，秒

//上午、下午
//a am/pm
//A AM/PM

//小时
//g 小时 12时格式 不补零
//G  小时 24时格式 不补零
//h   小时 12时格式 补零
//H  小时  24时格式  补零

echo '<br>'.date('g a',time()-2*3600);
echo '<br>'.date('G');
echo '<br>'.date('h a',time()-2*3600);
echo '<br>'.date('H');

//分
//i 分钟 补零
//秒
//s 秒 补零
//
echo '<br>'.date('r');
echo'<br>'.date('F m,Y,h:i,a');



//让特殊符号没有意义可以用 \转义符
//
//strtotime-- 将字符串转换成时间戳
echo '<br>'.date('c',time()-24*3600);

$timestape = strtotime('-1 day');
echo '<br>'.date('r',$timestape);


//+1 day
// week
// month
//next Monday  下周一
//last thursday 上周四
$timestape = strtotime('+2 week 2days 2hours 2 seconds');
echo '<br>'.date('c',$timestape);





//mktime 取得时间的时间戳
//参数 时分秒 月日年 夏时令
//使用mktime获得固定时间的时间戳
$timestape= mktime(8, 8, 8, 8, 8, 2018);//2018-08-08T08:08:08+08:00
 echo '<br>'.date('c',$timestape);

//传少值的情况
 $timestape= mktime(8);//2017-08-02T08:33:04+08:00
 echo '<br>'.date('c',$timestape);

 //得到时间的详细信息
 //参数是时间戳，不传 得到当前时间，传时间戳 得到时间戳的具体信息
 $dateArr = getdate();
 echo'<hr>';
 var_dump($dateArr);

 //获得时间的详细信息--能得到微妙
 $time =gettimeofday(true);
 var_dump($time);

 // 获取微妙
   echo '<br>'."微秒".microtime(true);

   //检测时间的真实性
   $res=    checkdate(8, 32, 2011);
   if ($res) {
     echo'<br> 有这一天';
   }else{
    echo'<br> 没有这一天';
   }


//功能
//刚刚
//5分钟之前
//1小时之内   多少分钟之前
//一天之内    多少小时多少分钟
//一个月之内   显示几天前
//几个月之前
//显示正常时间格式
//需要封装成方法  参数：时间
//见课件
echo '<hr>';
function  Times($time){
  echo '<br>'.date('Y-m-d H:i:s',time());
  $str=time()-strtotime($time);
if ($str< 5*60) {
    echo'<br>'.floor($str)."分钟之前";
}elseif ($str<3600) {
    echo '<br>'.floor($str/360)."分钟之前";
}elseif ($str<24*3600) {
    echo'<br>'.floor($str/3600)."小时之前";
}elseif ($str<30*24*3600) {
    echo '<br>'.floor($str/(24*3600))."天之前";
}elseif ($str<12*30*24*3600) {
    echo'<br>'.floor($str/(30*24*3600))."月之前";
}
}
Times('2017-08-01');


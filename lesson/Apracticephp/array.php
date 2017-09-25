<?php
/**
 * @Author: anchen
 * @Date:   2017-08-05 09:35:46
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-07 10:47:29
 */
$str='php hello';
if( strpos($str, 'hello')!=-1){
    echo 'ok';
}

$subStr = substr("abcdef", 4);
echo $subStr;
echo'<hr>';
$a = '2016-09-01 11:12:13';
$b ='2016-08-012 10:00:01';
if((strtotime($a)-strtotime($b))>0){
    echo $a;
}else{
    echo $b;
}
echo'<hr>';
$s = ['1','a','2','b','3','A','B','4'];

$rexgex= ['#\d#','#[a-z]#','#[1a]#'];

$replace = ['A:$0','B:$0','C:$0'];

$rs = preg_replace($rexgex,$replace,$s);

var_dump($rs);
echo '<hr>';
$subject = '18588888989';
$regex = '#(\d{3})(\d+)(\d{3})#';
$replace ='$1***$3';
$res= preg_replace($regex, $replace, $subject);
echo $res;

echo'<br>';
echo date (time());
echo date(gettimeofday(true)*1000);
echo '<br>';

$str ='<style>

            body{

                margin: 0;

                padding: 0;

                border: solid red 2px;

                width: 1060px;

                height: 638px;

                background-color: red;

                background-repeat: no-repeat;

                background-size: cover;

                background-size:contain;

            }

        </style>
';
    $str = trim($str,'<style></style>'.'body'.'{}');
$regex='#(\w+:)[^/s]#';
$rs=preg_split($regex, $str,-1,PREG_SPLIT_NO_EMPTY);
foreach ($rs as  $value) {
   $arr = preg_split('#:#',$value);
  list($key,$value) = $arr;
  $data[$key]= $value;
  }
 var_dump($data);


echo'<hr>';
$a = ['a','b','c','1','2','3'];
$regex ="#\d#";
var_dump(preg_grep($regex, $a, PREG_GREP_INVERT));

$str = "<starData>=1999-5-27";
$regex = '#<(\w+)>=(\d+)-(\d+)-(\d+)#';
$replace = '\1=\4/\3/\2';
$res = preg_replace($regex, $replace, $str);
echo $res;

function arr($arr,$user='php'){

}
echo "<hr>";
 $str = 'pic/user110.jpg';
 $pos = strstr($str,".");
 echo $pos;
 $sub =substr($str,-4);
 echo $sub;
var_dump(ltrim($str,'pic/uer110'));
echo '<br>';
function add($begin,$end){
    $sum=0;
    for ($i=$begin; $i <$end ; $i++) {
       $sum +=($i++);

    }
     return $sum;
}
add(0,4);
echo $sum;
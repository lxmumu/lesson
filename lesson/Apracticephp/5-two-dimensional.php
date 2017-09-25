<?php
/**
 * @Author: anchen
 * @Date:   2017-07-29 16:53:41
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-02 21:19:47
 */

$fruits = array (
    array (1, 2,null,null, 5, 6),
    array (1, 2,null,null, 5, 6),
);
echo(count($fruits[0]));

echo'<hr>';
$fruit[0][0]=1;
$fruit[0][3]=1;
$fruit[0][4]=1;
echo(count($fruit[0]));


echo'<hr>';
$arr=array(
 0=>array('title' => '新闻1', 'viewnum' => 123, 'content' => 'ZAQXSWedcrfv'),
 1=>array('title' => '新闻2', 'viewnum' => 99, 'content' => 'QWERTYUIOPZXCVBNM')
);
 echo  count($arr,1);

 echo '<hr>';

//二维选择排序法
$arr=array(
array(1,2,3,4),
array(1,3,4,5,6,7),
array(2,3,4,7,8,9,0)
  );
for ($i=0; $i <count($arr); $i++) {
for ($j=0; $j < count($arr[$i]); $j++) {
  echo $arr[$i][$j];
}
echo'<br>';
}

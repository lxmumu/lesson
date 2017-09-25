<?php
/**
 * @Author: anchen
 * @Date:   2017-08-04 09:03:33
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 09:31:58
 */
// in_array(needle, haystack, strict)
// in_array(需要在数组中搜索的值，区分大小写；需要检索的数组；可选值)
$os = array("Mac","NT","Irix","Linux");
if (in_array("Irix",$os)) {
   echo '<br>'."输出";
}
echo '<br>';
// array_fill(start_key, num, val);
$creation = array_fill(0,3, array_fill(0,2, null));
 $abc =0;
 for ($i=0; $i < 3; $i++) {
    for ($j=0; $j < 2; $j++) {
    $abc=$abc+1;
    $creation[$i][$j]=$abc;
    }
}
    print_r($creation);//Array ( [0] => Array ( [0] => 1 [1] => 2 ) [1] => Array ( [0] => 3 [1] => 4 ) [2] => Array ( [0] => 5 [1] => 6 ) )
    echo '<hr>';
    $a =array_fill(5,6,'banana');
    $b = array_fill(-2,4,'pear');
    print_r($a);
    print_r($b);


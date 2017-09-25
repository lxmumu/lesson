<?php
/**
 * @Author: anchen
 * @Date:   2017-07-31 19:56:49
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-31 20:36:50
 */
//将十进制转换成二进制
//递推函数


function sum_2($nums){
    if ((int)$nums == 0) {
     return;
    }else{
        sum_2($nums/2);
        echo $nums%2;

    }
}
sum_2(10);
<?php
/**
 * @Author: anchen
 * @Date:   2017-08-17 14:43:53
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-17 15:52:45
 */
$num ="24linux"+6;
echo $num.'<br>';//30

$num ="linux24"+6;
echo $num.'<br>';//6



$arr=['name'=>'zhang','age=>12'];
 $json=json_encode($arr);

?>
 姓名 :<?=$arr['name'];?>

<button type="button" onclick="display_name()">弹出姓名</button>
<script>
    var person =<?=$json?>;

    function  display_name(){
        alert(person.name);
    }

</script>
<?php
/**
 * @Author: anchen
 * @Date:   2017-07-27 22:12:13
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-27 22:21:34
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Document</title>
  <style>
    *{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      text-align: center;
    }
    td{
      width: 50px;
      height: 20px;
    }
.left td{
    transform:  rotate(180deg);
}
.left{
    width:50%;
    transform:rotateY(180deg) rotateX(360deg);
    float: left;
}
.right{
    float:right;
    width:50%;

}

  </style>
</head>
<body>
<div class="left">
<table rules="all"  border="1">
  <?php

for ($i=1; $i<= 9; $i++) {
echo "<tr>";
for ($j=1; $j<= $i; $j++) {
  $c =$i *$j;
echo "<td>$i*$j=$c</td>";
}
 echo"</tr>";
}
for ($i=9; $i>= 1; $i--) {
echo "<tr>";
for ($j=1; $j<= $i; $j++) {
  $c =$i *$j;
echo "<td>$i*$j=$c</td>";
}
 echo"</tr>";
}
?>
</table>
</div>
<div class="right">
<table rules="all" border="1">
<?php
for ($i=1; $i<= 9; $i++) {
echo "<tr>";
for ($j=1; $j<= $i; $j++) {
  $c =$i *$j;
echo "<td>$i*$j=$c</td>";
}
 echo"</tr>";
}
for ($i=9; $i>= 1; $i--) {
echo "<tr>";
for ($j=1; $j<= $i; $j++) {
  $c =$i *$j;
echo "<td>$i*$j=$c</td>";
}
 echo"</tr>";
}
?>
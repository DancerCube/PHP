<?php header("Content-type:text/html;charset=utf8");
/**
 * @Author: anchen
 * @Date:   2015-05-14 15:49:22
 * @Last Modified by:   anchen
 * @Last Modified time: 2015-06-02 15:14:21
 */
$num = "10.235scd";

$num2 = intval($num);
$num3 = floatval($num);
$num4 = strval($num);

var_dump($num2);
echo "<br>";
var_dump($num3);
echo "<br>";
var_dump($num4);
echo "<br>";
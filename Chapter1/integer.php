<?php 
//先定义一 个10进制的整数
var_dump(180);
echo '<hr>';
//再定义一个8进制的整数，以0开关，只请允许用0-7表示
var_dump(035);
//16进制，以0X开头，0-9表示的意义与之前一样，10-15用A-F来表示
echo '<hr>';
var_dump(0x3a83);
//无论是什么进制的数据，最终都是以10进制的方式显示的
//查看本机的最大整数：PHP_INT_MAX,9e18
echo "<hr>";
var_dump(PHP_INT_MAX);
echo "<hr>";
var_dump(PHP_INT_MAX+1);
echo "<hr>";
var_dump((int)true);
var_dump((int)false);
echo "<hr>";
var_dump(intval(true));
var_dump(intval(false));//推荐使用intval函数方式来转换
echo "<hr>";
//字符串转换为整数
var_dump(intval('php'));//字符串中有效数字为0
var_dump(intval('33php'));
var_dump(intval('ph33p'));
//将浮点数转为整数
echo "<hr>";
var_dump(intval(324.9434));//只保留整数
echo "<hr>";
var_dump(round(324.9434));//四舍五入
 ?>
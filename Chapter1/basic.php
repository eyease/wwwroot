<?php 
//数组是键值对的有序集合
//数组的键名，必须是整数或字符串，如果不是，将会自动转换为这两个类型

//索引数组
$arr=['html','css','js'];
$arr=['html',5=>'css','js'];//可以指定键名，后续的将递增
$arr=['html',3.9=>'css','js'];//3.9将转换为3
$arr=['html',false=>'css','js'];//false转换成了0，就替换了原0键的值
echo '<pre>';
print_r ($arr);
echo '</pre>';
//关联数组，实际中使用更多
echo '<hr>';
$arr1=['name'=>'prter','age'=>28,'sex'=>'male'];
echo '<pre>';
print_r ($arr1);
echo '</pre>';
 ?>
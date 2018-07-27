<?php 
//array_key_exists($key,$array)
//array_key_exists(键名,数组)
//返回布尔值，true就是存在，false就是不存在
$arr=['name'=>'peter','age'=>28,'sex'=>'male'];
$key='name';
$res=array_key_exists($key,$arr);
var_dump($res);
echo '<hr>';
if ($res==true) {
	echo '键名'.$key.'存在';
}else{
	echo '键名'.$key.'不存在';
}
echo '<hr color=red>';
// in_array($value, $array,true):判断数组中是否存在某个值
// 第一个要查询的值，第二个目标数组，第三个参数true，是否开启严格模式，如果开启，则值与类型必须完全匹配
// 字符类型区分大小写
$arr=['name'=>'peter','age'=>28,'sex'=>'male'];
$value='peter';
$res=in_array($value, $arr,true);//true：值与类型完全匹配
var_dump($res);
echo '<hr>';
//值的类型支持数组


// array_search($value, $array)在数组中搜索指定的值，找到时返回该值的键名，支持true参数
echo array_search($value, $arr);
echo '<hr>';
echo array_search('fda', $arr).'faff ';
//如果找不到则返回空

echo '<hr>';
$arr=['name'=>'peter','age'=>28,'name'=>'male'];
print_r($arr);
 ?>
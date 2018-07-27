<?php
//先创建三个变量
$name='Peter';
$age= 28;
$is_mar=true;


//查看变更类型
echo '$name的类型是' .gettype($name);
echo '<hr>';
echo '$age的类型是' .gettype($age);
echo '<hr>';
echo '$is_mar的类型是' .gettype($is_mar);
echo '<hr>';
var_dump($name);
echo '<hr>';
var_dump($age); 
echo '<hr>';
var_dump($is_mar);
echo '<hr>';
echo '<hr>';
// 强制改变，原值类型并没有发生变化，只是引用了新类型的值
$str=(string)$age;
echo gettype($str);//不推荐
echo '<hr>';
if (is_string($str)){
	echo 'str是字符类型';
}else{
	echo 'str不是字符类型';
}

//永久性类型转换 ：settype(var ,type)
echo '<hr>';
settype($age, 'string');
if (is_string($age)){
	echo '$age是字符类型';
}else{
	echo '$age不是字符类型';
}
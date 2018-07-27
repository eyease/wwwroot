<?php 
// array_filter($array,callback) 数组过滤器
// 将数组中的值，依次逐个传入回调函数中处理，只有处理结果为true的元素才允许出现在结果数组中

$arr=range(1, 9);

function odd($n){
	return $n &1;//按位  与  运算，只有奇数才能返回1，否则返回0
}
function even($n){
	return  !($n &1);//取反运算
}

$arr1=array_filter($arr,'odd');
$arr2=array_filter($arr,'even');
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';

 ?>
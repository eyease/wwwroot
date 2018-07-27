<?php 
// array_walk(array, funcname) 要处理的数组，回调函数
// 功能：遍历数组，更新元素

//非常重要的函数
$arr=['name'=>'peter','age'=>28,'sex'=>'male'];
function printArr($value,$key){
	echo "我的{$key}是{$value}<br>";
}
array_walk($arr, 'printArr');

function alterArr(&$value,$key,$suffix){
	$value.=$suffix;//给元素值添加后缀
}

array_walk($arr, 'alterArr','_php');
echo '<hr>';
array_walk($arr, 'printArr');
 ?>
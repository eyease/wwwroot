<?php 
// 将回调函数作用在一个或多个数组元素值上
// array_map(callback, arr1,arr2)
//将回调函数作用到每个数组上，并返回一个新数组：默认索引数组
//回调函数的参数数量，必须与要处理的数组数量一致


$arr1=[1,2,3,4,5];
$func1=function ($value){
	return $value*2;
};

$newArr1=array_map($func1, $arr1);
echo '<pre>';
print_r($newArr1);
echo '</pre>';


echo '<hr color=red>';
// 2 将回调函数作用在多个数组元素值上
$arr2=['aa','bb','cc','dd','ee'];
//创建回调函数，参数数量必须与数组数量一致
$func2=function ($value1,$value2){
	return "第{$value1}个城市的名字是{$value2}<br>";
};
$newArr2=array_map($func2, $arr1,$arr2);
echo '<pre>';
print_r($newArr2);
echo '</pre>';

$new=array_values($newArr2);
echo '<hr>';

for ($i=0; $i <count($new) ; $i++) { 
	echo $new[$i];
}
 ?>
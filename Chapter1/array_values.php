<?php 
//array_values();将当前数组元素的值，全部取出后重新打包到一个默认索引数组中
//默认索引数组：下标从0开始递增，其实就是省略掉键名的数组
//用在只需要对数组元素的值感兴趣的场合，例如大量数据的搜索等
$arr=['name'=>'peter','age'=>28,'isMarr'=>true];
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<hr>';
$arr1=array_values($arr);
echo '<pre>';
print_r($arr1);
echo '</pre>';

echo '<hr color=red>';

//array_keys()将当前数组的键取出来，以默认索引数组方式返回
//数组的值，就是当前数组的键名，非常适合于处理关联数组
$arr=['name'=>'peter','age'=>28,'isMarr'=>true];
$keyarray=array_keys($arr);
echo '<pre>';
print_r($keyarray);
echo '</pre>';
echo '<hr>';
for ($i=0; $i <count($keyarray); $i++) { 
	echo '我的'.$keyarray[$i].'是'.$arr[$keyarray[$i]].'<br>';
}
 ?>
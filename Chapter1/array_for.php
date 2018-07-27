<?php 
//用for语句完成索引数组遍历
$arr=range(1,10);//生成一个1到10的数组
for ($i=0; $i <count($arr) ; $i++) { //count用来计算数组元素个数
	echo $i.'=>'.$arr[$i].'<br>';
	echo '第'.($i+1).'个元素是：'.$arr[$i].'<br>';
}
echo '数组元素总个数为：'.count($arr) .'<br>';

echo '<hr>';
//用for语句完成关联数组遍历
$arr1=['name'=>'peter','age'=>28,'sex'=>'male'];
for ($i=0; $i <count($arr1) ; $i++) { 
	echo key($arr1).'=>'.current($arr1).'<br>';
	next($arr1);//内部指针下移
	}
echo '<hr color=red>';
//用while语句完成索引数组遍历
$arr3=range(1,10,2);//生成1到10的数组，步长为2  [1,3,5,7,9]

$i=0;
while ($i < count($arr3)) {
	echo ($i+1).'=>'.$arr3[$i].'<br>';
	$i++;
}
echo '<hr>';

$arr4=['name'=>'peter','age'=>28,'sex'=>'male'];
$i=0;
while ( $i< count($arr4)) {
	echo key($arr4).'=>'.current($arr4).'<br>';
	next($arr4);
	$i++;
}
//用foreach语句完成索引数组遍历  PHP专门为数组设立的

echo '<hr color=red>';
$arr5=range(1,10,2);
foreach ($arr5 as $key => $value) {
	echo '第'.$key.'个元素的值是：'.$value.'<br>';
}
echo '<hr>';
//用foreach语句完成关联数组遍历  PHP专门为数组设立的
$arr6=['name'=>'peter','age'=>28,'sex'=>'male'];
foreach ($arr6 as $key => $value) {
	echo $key.'元素的值是：'.$value.'<br>';
}
 ?>
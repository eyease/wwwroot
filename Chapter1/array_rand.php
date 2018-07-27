<?php 
// array_rand(input):从数组中随机取出一个或者多个元素的键名
$arr=['登巴','城市','雪花','时风'];
// echo array_rand($arr);
$keyArr=array_rand($arr,2);//返回的键名组成的数组
print_r($keyArr);
echo '<br>';
//根据随机获取有键名，来随机取出数组元素
if (count($keyArr>0)) {
	foreach ($keyArr as $key => $value) {
		$keyNo=$key+1;
		echo '第'.$keyNo.'随机出的元素是：'.$arr[$value].'<br>';
	}
}
echo '<hr>';

// shuffle(array)将数组乱序输出，原有键名全部删除，按默认索引重建
// 返回布尔值，1表示成功，0表示失败
$arr=['aa'=>'登巴','bb'=>'城市','cc'=>'雪花','dd'=>'时风','ee'=>'上海'];
if (shuffle($arr)) {
	echo '新数组打乱后，新数组如下：<br>';
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	# code...
}else{
	echo '数组打乱失败';
}
echo '<hr>';
//array_sum(array):求数组元素的和
echo array_sum([1,2,3,4,5]);
echo '<br>';
echo array_sum(['1',2,3,4,5]);//说明将字符串自动转为数字
echo '<br>';
echo array_sum(['php1','2php',3,4,5]);//前导应是数字，php被转化成0
echo '<hr>';
//range(low, high)//还可以指定步长
print_r(range(1, 10)) ;
 ?>
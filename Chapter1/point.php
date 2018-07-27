<?php 
//初始化创建一个数组
$arr=['html','css','js','php'];

echo '<pre>';
print_r($arr);
echo '</pre>';
//用数组内部指针来遍历数组元素
echo '当前元素是：'.key($arr).'=>'.current($arr).'<br>';
next($arr);//指针下移一位
echo '当前元素是：'.key($arr).'=>'.current($arr).'<br>';
next($arr);//指针下移一位
echo '当前元素是：'.key($arr).'=>'.current($arr).'<br>';
prev($arr);//指针上移一位
echo '当前元素是：'.key($arr).'=>'.current($arr).'<br>';
reset($arr);//指针上移一位
echo '当前元素是：'.key($arr).'=>'.current($arr).'<br>';//reset函数是很常用的
end($arr);//指针上移一位
echo '当前元素是：'.key($arr).'=>'.current($arr).'<br>';

echo '<hr color=red>';

end($arr);
key($arr);
$count=key($arr);
echo '当前数组有'.$count.'个元素'.'<br>';
reset($arr);
for ($i=0; $i <$count ; $i++) { 
	echo '当前元素是：'.$i.'=>'.$arr[$i].'<br>';
}

 ?>
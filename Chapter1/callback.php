<?php 
//可变函数（也叫变量函数） 函数名称来自于另一个变量，回调函数
function add($n,$m){
	return '$n+$m='.($n+$m);
}
function sub($n,$m){
	return '$n-$m='.($n-$m);
}
function mult($n,$m){
	return '$n*$m='.($n*$m);
}
function  div($n,$m){
	return '$n/$m='.($n/$m);
}

echo "可变函数的用法：<br>";
$funcName='add';
echo $funcName(10,5);//相当于add(10,5)
echo '<br>';
$funcName='mult';
echo $funcName(10,5);//相当于mult(10,5)
echo '<hr>';
echo'用call_user_func_array(可变函数名称，参数列表数组)来调用可变函数：<br>';
$funcNam='mult';
echo call_user_func_array($funcName, [15,3]).'<br>';//推荐使用这种方式
echo call_user_func_array($funcName, [4,5]);
//回调函数
echo '<hr>';
function arithmetic($funcName,$a=0,$b=0)
{
	//return $funcName($a,$b);
	return call_user_func_array($funcName, [$a,$b]);//一个函数的参数，来自另一个函数，这个时间就叫回调
}
echo arithmetic('add',30,20);
echo '<hr>';
echo arithmetic('mult',30,20);
echo '<hr>';
echo arithmetic('div',30,20);

 ?>
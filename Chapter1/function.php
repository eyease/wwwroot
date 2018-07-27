
<?php 
//创建函数
function showMess($siteName)//形参
{
	return'我在'.$siteName.'学习';
}

//调用函数：按名称调用
echo showMess('PHP中文网');//实参
echo  '<br>';
//值参数和引用参数

$num=10;//全局变量
//function demo1($num){//值参数是将全局变量的值复制到形参中
function demo1(&$num){//引用参数，是将全局变量的引用地址复制到形参中，函数内部对形参的任何改动，都会映射到全局变量，这两个是内存共同体
	return $num+=10;
}
echo '全局变量$num是：'.$num;
echo  '<br>';
echo '函数以值参数调用后的$num是：'.demo1($num) ;
echo  '<br>';
echo '全局变量$num是：'.$num;


echo  '<hr color=red>';

//默认参数：适合于实参数量小于形参，多出来的形参必须设置为默认的参数，这个默认参数必须放在函数参数列表的右边
function demo2($n=1,$m=2,$k=3){
	return '$n+$m+$k='.($n+$m+$k);
}
echo demo2();//不传任何参数，就全部调用默认参数 =6
echo  '<br>';
echo demo2(10,20);//少传的那个参数，就调用默认的第三个参数  =33
echo  '<br>';
echo demo2(10,20,30);// =60

echo  '<hr color=red>';
//可变参数：函数可能接受任意数量的参数，适合实参大于形参
//func_get_arg()：用在函数体内，将函数当前的参数打包到一个数组内返回
//function demo3($a,$b,$c){
function demo3(){
	echo '<pre>';
	print_r(func_get_args());//非常有用
	echo '</pre>';
	echo func_get_arg(0);//指定键的值
}

demo3('html','css','js','php');

 ?>
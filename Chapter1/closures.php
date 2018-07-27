<?php 
//匿名函数：没有名称或者名称可以动态设置的函数
//创建一个匿名函数
$showMess=function ($study)
{
	return '我在'.$study.'学习';
};//这是一个语句，结束必须加分号
//在javaScript中这叫做函数表达式

//调用匿名函数
echo $showMess('php中文网');
echo '<hr>';

//闭包，就是在一个函数内，引入了一个匿名函数，就构成一个闭包
function display($domain){
	$pageTitle='php中文网';
	$site=function ($name)  use($pageTitle){
		return $pageTitle.'的域名是：'.$name;
	};
	return $site($domain);
}
//调用一下这个闭包函数
echo display('www.php.cn');
echo '<hr color=red>';

//引用函数中的局部变量，或者说父级创建变量  要加use（）

 ?>
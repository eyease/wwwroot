<?php 
//局部变量，在函数内容创建，在函数内容作用
//全局变量，在当前脚本使用
//超级全局变量，跨脚本，任何地方都能用   系统预定义
//静态变更，函数内部用Static创建，可供每次调用时共享

$siteName='www.php.cn';//全局变量
function  getSiteName(){
	$siteName='PHP中文网';//局部变量
	return $siteName.'域名是'. $GLOBALS['siteName'];//利用 $GLOBALS访问的全局变量
}
echo $siteName;
echo "<hr>";
echo  getSiteName();
/*echo "<pre>";
print_r($GLOBALS);
echo "</pre>";*/
echo "<hr>";
echo $GLOBALS['siteName'];//利用 $GLOBALS访问的变量
echo "<hr>";

function sum()
{
	static $total=10;//函数内的变量如果不用Static特别声明，使用完就释放掉了
	return $total +=10;
}
echo sum().'<br>'.sum().'<br>'.sum();//多次共享，可以保留上次的结果
 ?>
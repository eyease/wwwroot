<?php 
//将外部文件引入到当前文件中
require 'temp1.php';//require用在开关，引入的文件内容直接替换该语句
echo showMess1();
//include 适合于运行过程中，引入外部文件
echo '<hr>';
$on=true;
if ($on) {
	include 'temp2.php';
	echo showMess2();
}else{
	echo 'include 没有引入任何文件';
}
//include和require并不是函数，而是语言结构，与echo一样，后面的参数文件名，可以放在括号内，也可以以字符串字面量形式直接给出，这两者没有区别

//require_once和include_one  都是确保文件只引入一次
 ?>
<?php 
/*建议养成初始化变量的习惯，因为PHP会默认给变量一个值
BOOL：false
数值：0
字符：“”字符串
数组：[]空数组*/
//$var=0;
var_dump($var+10);
echo "<hr>";
var_dump($var.'phpnet');
echo "<hr>";
var_dump($var ? '真':'假');
echo "<hr>";
var_dump(count($var));

$name='peter';
$name=null;
$name='';
$age=19;
$age=0;
$isMarr=false;
//$isMarr=1;
$arr=[];//创建一个空数组
echo "<hr>";
echo "$isMarr";
echo "<hr color=red>";

echo '引用传递赋值';
echo "<hr>";
$var1='php';
$var2=&$var1; //&是引用传递，相当于给一个变量取了两个不同的名字 ；不加的话，就是值传递，不会联动
echo $var1.'---'.$var2;
$var2='html';
echo "<hr>";
echo $var1.'---'.$var2;
echo "<hr color=red>";
//一般的编程语言，变量名是不可以改变的
//PHP比较灵活，引入可变变量：变量名称可以来自另一个变量的值
$name='pageTitle';
$$name='PHP中文网';//相当于又定义了一个新变量：$pageTitle   $$name就来自于$name的值
echo $name;
echo "<hr color=red>";
//下面用两种方法来访问变更$pageTitle
echo "<hr color=red>";
echo $$name;
echo "<hr>";
echo $pageTitle;

//注意：用作变量名称的变量值，必须是一个合法有效的标识符  灵活，但是可读性会下降，须权衡